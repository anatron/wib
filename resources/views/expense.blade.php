@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Submit Your Expenses</h1>

            
        </div>
        <div class="row justify-content-center">
            <p>Here you can submit your expenses for the day</p>
        </div>
        
        <div class="eContainer">
            <h1>Expenses of the Week</h1>
            <label><h3>How much did you spend on employees?</h3></label>
            <input class="input1"><br>
            <label><h3>How much did you spend on supplies?</h3></label>
            <input class="input1"><br>
            <label><h3>How much did you spend on food?</h3></label>
            <input class="input1"><br>
            <label><h3>How much did you spend on bills?</h3></label>
            <input class="input1"><br>
            <label><h3>How much did you spend on travel?</h3></label>
            <input class="input1"><br>
            <button type="submit" class="eButton"><a href="/expensesgraph">
                Submit</a></button><br>
        </div>
    </div>
    
@endsection