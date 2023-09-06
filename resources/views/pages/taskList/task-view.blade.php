<html lang="en">
<style>
    label{
        font-weight: 600;
    }
</style>

<body>

    <div class="d-flex justify-content-center p-2 m-2">
        <div class="card p-2 w-50">
            <div class="d-flex justify-content-between">
                <div class="">
                    <h3>User Profile</h3>
                </div>
                <div class="">
                    <a href="{{ route('task.edit',$task->id) }}"><button class="btn btn-primary"><i class="fa fa-edit"></i>Edit</button></a>
                </div>
            </div>
            <hr class="my-1 mb-2">
            <div class="row">
                <div class="col-4">
                    <div class="border p-1 text-center">
                        <img src="{{ asset('task.png') }}" alt="user image" width="120">
                    </div>
                </div>
                <div class="col-8">
                    <h6>General Information</h6>
                    <hr class="my-1">
                    <div class="d-flex justify-content-between">
                        <label class="">Title:</label>
                        <span class="text-primary">{{ $task->title }}</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <label class="">AssignUser :</label>
                        <span class="text-primary">{{ $task->AssignUser }}</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <label class="">Description:</label>
                        <span class="text-primary">{{ $task->Description }}</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <label class="">DueDate:</label>
                        <span class="text-primary">{{ $task->DueDate }}</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <label class="">status:</label>
                        <span class="text-primary">{{ $task->Status }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
