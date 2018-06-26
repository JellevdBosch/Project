<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Activiteit;

class ActiviteitController extends Controller
{
    /**
     * Listing Of activiteiten
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activiteit::get();
        return view('/admin/activiteit',compact('activities'));
    }

    /**
     * Upload activiteit function
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'activity' => 'required',
            'date' => 'required'
        ]);
        $input['title'] = $request->title;
        $input['activity'] = $request->activity;
        $input['date'] = $request->date;
        Activiteit::create($input);


        return back()->with('success','Activiteit succesvol gemaakt!');
    }

    /**
     * Remove activity function
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Activiteit::find($id)->delete();

        return back()->with('success','Activiteit succesvol verwijderd.');
    }
}