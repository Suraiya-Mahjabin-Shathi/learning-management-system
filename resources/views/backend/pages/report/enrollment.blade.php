@extends('backend.master')

@section('content')

<div class="container mt-3">

<h1>Enrollment Report</h1><br>

<form action="{{route('enrollment.report.search')}}" method="get">

    <div class="row">
        <div class="col-md-4">
            <label for="">From date:</label>
            <input name="from_date" type="date" class="form-control">
    
        </div>
        <div class="col-md-4">
            <label for="">To date:</label>
            <input name="to_date" type="date" class="form-control">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success">Search</button>
        </div>
    </div>
    
    </form>
    <div id="enrollmentReport">
    
    <h1>Enrollment Reports- {{date('Y-m-d')}}</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User ID</th>
                <th scope="col">Course ID</th>
                <th scope="col">Order Date</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($enrollment))
            @foreach($enrollment as $key=>$enrollment)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$enrollment->user_id}}</td>
                <td>{{$enrollment->course_id}}</td>
                <td>{{$enrollment->created_at}}</td>
            </tr>
            @endforeach
            @endif
            </tbody>
        </table>
    </div>
    <button onclick="printDiv('enrollmentReport')" class="btn btn-success">Print</button>
    <br><br><br><br><br><br><br>
    
    
    <script>
        function printDiv(divId){
            var printContents = document.getElementById(divId).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
</div>
@endsection
