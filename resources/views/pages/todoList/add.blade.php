@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="wrapper fadeInDown">
                <div id="formContent">
                    <h1>Create Form</h1>
                        <!-- Login Form -->
                    <form>
                        <input type="text" id="task_name" class="fadeIn" name="task_name" placeholder="task_name">
                        <input type="text" id="comment" class="fadeIn" name="comment" placeholder="comment">
                        <input type="date" id="password" class="fadeIn" name="date" placeholder="date">
                        <input type="text" id="password" class="fadeIn" name="status" placeholder="status">
                        <input type="button" value="Submit" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
