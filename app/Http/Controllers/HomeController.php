<?php

namespace App\Http\Controllers;
use App\Models\registerModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
        return view(view: 'home');
    }
    public function submit(Request $request){
        $result = new registerModel;
        $result->name=$request['name'];
        $result->email=$request['email'];
        $result->password=$request['password'];
        $result->phone=$request['phone'];
        $result->address=$request['address'];
        $result->gender=$request['gender'];
         $result->image=$request['image'];
        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $result->image = $imageName; // Store image name in database
        }
        // if ($_FILES['file_upload']) {
        //     # code...
        //     $path =$_FILES['file_upload']['name'];
        //     // echo $path;
        //     $upload_path="./uploads/".$path;
        //     if (move_uploaded_file($_FILES['file_upload']['tmp_name'], $upload_path)) {
        //         echo"upload success";
        //     }
        //     else{
        //         die("failed to upload");
        //     }
        // }

        $result->save();
        return back();
        

}
public function studentListing() {
    $list = registerModel::select('*')->get();
   // dd($list);   
    return view('list',compact('list'));
}

// public function deleteStudent($id) {
//     registerModel::destroy($id); // Pass the ID to delete the specific record
//     return redirect('list')->with('success', 'Student deleted successfully');
// }
public function deleteStudent($id){
    registerModel::where('id', $id)->delete(); // Deletes the record with the given ID
    return redirect('list')->with('success', 'Student deleted successfully'); // Redirect with success message
}

public function editStudent($id) {
    $data = registerModel::find($id);
    return view('edit', compact('data'));

}

public function updateStudent(Request $request, $id) {
    // Find the student by ID
    $student = registerModel::findOrFail($id);

    // Update the fields
    $student->name = $request->name;
    $student->email = $request->email;
    $student->password = $request->password;
    $student->phone = $request->phone;
    $student->address = $request->address;
    $student->gender = $request->gender;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $student->image = $imageName; // Update the image name in the database
    }

    $student->save(); // Save the updated student record

    return redirect('list')->with('success', 'Student updated successfully');
}

}
