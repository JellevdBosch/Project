<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\ImageGallery;
use Illuminate\Support\Facades\File;

class ImageGalleryController extends Controller
{


	/**
	 * Listing Of images gallery
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$images = ImageGallery::get();

		return view('/admin/image-gallery',compact('images'));
	}


	/**
	 * Upload image function
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function upload(Request $request)
	{
		$this->validate($request, [
			'title' => 'required',
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);


		$input['image'] = $request->title.'.'.$request->image->getClientOriginalExtension();
		$request->image->move(public_path('images/gallery'), $input['image']);


		$input['title'] = $request->title;
		ImageGallery::create($input);


		return back()->with('success','Image Uploaded successfully.');
	}


	/**
	 * Remove Image function
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($image, $id)
	{
        $path = public_path('images\gallery\\');

        if(File::exists($path. $image)) {

            ImageGallery::find($id)->delete();

            File::delete($path. $image);

        } else {

            return back()->with('success','Failed to delete: .' . $image);

        }

        return back()->with('success','Image removed successfully.');
	}
}