<?php

namespace App\Http\Controllers\cms\industries;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\IndustriesPage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\IndustriesSecuritySection;
use App\Models\PageCategory;
use App\Models\SolutionSubPage;

class IndustriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $industries_pages = IndustriesPage::all();
        return view('admin.cms.industries.home', compact('industries_pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $solution_sub_pages = SolutionSubPage::all();
        // dd($sub_pages);
        return view('admin.cms.industries.add-industries-page', compact('solution_sub_pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        // dd($request->all());
        $page_title = IndustriesPage::all();
        foreach($page_title as $title){
            if($title->page_title == $request->page_title){
                return redirect()->back()->with('error', 'Same page having title of '. $request->page_title.' is already exits!');
            }
        }
        $industries_page = new IndustriesPage;
        if($request->page_title){
            $industries_page->page_title = $request->page_title;
        }
        if($request->meta_name){
            $industries_page->meta_name = $request->meta_name;
        }
        if($request->meta_description){
            $industries_page->meta_description = $request->meta_description;
        }
        if($request->header_heading){
            $industries_page->header_heading = $request->header_heading;
        }
        if($request->header_description){
            $industries_page->header_description = $request->header_description;
        }
        $industries_page->slug = Str::slug($request->page_title);
        if($request->bg_image){
            $file = $request->file('bg_image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/industries/';
            $file->move($destinationPath, $filename);
            $industries_page->bg_image = $filename;
        }
        if($industries_page->save()){
            return redirect()->route('cms.industries.index')->with('success', 'industrial Page added successfully');

        }
        else{
            return redirect()->route('cms.industries.index')->with('error', 'Something went wrong!');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd('edit');
        $industries_page = IndustriesPage::find($id);
        return view('admin.cms.industries.edit-industries-page', compact('industries_page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $industries_page = IndustriesPage::find($id);
        // dd($request->page_title);
        if($request->page_title){
            $industries_page->page_title = $request->page_title;
        }
        if($request->meta_name){
            $industries_page->meta_name = $request->meta_name;
        }
        if($request->meta_description){
            $industries_page->meta_description = $request->meta_description;
        }
        if($request->header_heading){
            $industries_page->header_heading = $request->header_heading;
        }
        if($request->header_description){
            $industries_page->header_description = $request->header_description;
        }
        if($request->bg_image != null){
            //delete previous image from folder
            $path =  public_path('frontend').'/images/industries/'.
            $industries_page->bg_image;
            if(File::exists($path)){
                File::delete($path);
            }

            $file = $request->file('bg_image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/industries/';
            $file->move($destinationPath, $filename);
            $industries_page->bg_image = $filename;
        }
        $industries_page->slug = Str::slug($request->page_title);
        if($industries_page->save()){
            return redirect()->route('cms.industries.index')->with('success', 'industrial Page updated successfully');

        }
        else{
            return redirect()->route('cms.industries.index')->with('error', 'Something went wrong!');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $industries_page = IndustriesPage::find($id);
        $security_sections = IndustriesSecuritySection::where('industries_page_id', $id)->get();
        // dd($security_sections);
        // code to delete security sections
        foreach($security_sections as $security_section){
            $delete_sections = $this->deleteAllSection($security_section->id);
            $security_section->delete();
        }

        if($industries_page->delete()){
            return redirect()->route('cms.industries.index')->with('success', 'industrial page and it\'s security sections deleted successfully');
        }
        else{
            return redirect()->route('cms.industries.index')->with('error', 'Something went wrong!');

        }
    }
    // function to delete all security section of a single industrial page
    public function deleteAllSection($id){
        // dd($id);
        $security_sections = IndustriesSecuritySection::find($id);
        // dd($security_sections);
        if($security_sections->delete()){
            return redirect()->route('cms.industries.index')->with('success', 'industrial page and it\'s security sections deleted successfully');

        }
        else{
            return redirect()->route('cms.industries.index')->with('error', 'Something went wrong!');

        }
    }

    //security section crud
    public function securitySectionIndex(){

        $industries_pages = IndustriesPage::all();
        // $security_sections = IndustriesSecuritySection::all();

        $security_sections = IndustriesSecuritySection::join('industries_pages','industries_pages.id','=','industries_security_sections.industries_page_id')->select('industries_security_sections.*','industries_pages.page_title as page_title')->get();

        // dd($security_sections);
       return view('admin.cms.industries.security-section-page-index', compact('security_sections','industries_pages'));
    }
    //store security section
    public function storeSecuritySection(Request $request){
        // dd($request->all());
        $security_section = new IndustriesSecuritySection;

        if($request->industries_page_id){
            $security_section->industries_page_id = $request->industries_page_id;
        }
        if($request->heading){
            $security_section->heading = $request->heading;
        }
        if($request->description){
            $security_section->description = $request->description;
        }
        if($request->image){
            $file = $request->file('image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/industries/security-section/';
            $file->move($destinationPath, $filename);
            $security_section->image = $filename;
        }
        if($security_section->save()){
            return redirect()->route('cms.industries.security-section.index')->with('success', 'industrial security section added successfully');

        }
        else{
            return redirect()->route('cms.industries.index')->with('error', 'Something went wrong!');

        }
    }
    //show security section
    public function showSecuritySection($id)
    {
        $data = IndustriesSecuritySection::find($id);
        $ipn = IndustriesPage::where('id', '=', $data->industries_page_id)->first();
        $name = $ipn->page_title;
        return view('admin.cms.industries.show-section', compact('data', 'name'));
    }
    //edit security section
    public function editSecuritySection($id)
    {
        $data = IndustriesSecuritySection::find($id);
        $ipn = IndustriesPage::where('id', '=', $data->industries_page_id)->first();
        $industries_pages = IndustriesPage::all();

        return view('admin.cms.industries.edit-section', compact('data', 'ipn', 'industries_pages'));

    }
    //update security section
    public function updateSecuritySection(Request $request,$id)
    {
        // dd($request->all());
        $data = IndustriesSecuritySection::find($id);

        if($request->industries_page_id){
            $data->industries_page_id = $request->industries_page_id;
        }
        if($request->heading){
            $data->heading = $request->heading;
        }
        if($request->description){
            $data->description = $request->description;
        }
        if($request->image){
            //delete previous image from folder
            $path =  public_path('frontend').'/images/industries/security-section/'.
            $data->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/industries/security-section/';
            $file->move($destinationPath, $filename);
            $data->image = $filename;
        }
        if($data->save()){
            return redirect()->route('cms.industries.security-section.index')->with('success', 'industrial security section update successfully');

        }
        else{
            return redirect()->route('cms.industries.security-section.index')->with('error', 'Something went wrong!');
        }
    }
    //delete security section
    public function deleteSecuritySection($id)
    {
        $data = IndustriesSecuritySection::find($id);
        if($data->delete()){
            return redirect()->route('cms.industries.security-section.index')->with('success', $data->heading.' Sections deleted successfully');

        }
        else{
            return redirect()->route('cms.industries.security-section.index')->with('error', 'Something went wrong!');

        }
    }

    //show industries on frontend
    public function showSlug($slug)
    {
        $page = IndustriesPage::whereSlug($slug)->first();
        // dd($page);

        // // dd($pc);

        // // dd($sub_pages);
        if($page == null){
            abort(404);
        }
        else{
            $security_sections = IndustriesSecuritySection::where('industries_page_id',$page->id)->get();
            return view('frontend.industries.page',compact('page' ,'security_sections'));
        }
    }
}
