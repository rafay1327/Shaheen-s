@extends('main')

@section('title', '| Contact')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Contact us</h1>

            <form>
            <div class="form-group">
                <label name="email">Email:</label>
                <input name="email" id="email" class="form-control">

            </div>
            
            <div class="form-group">
                <label name="subject">Subject:</label>
                <input name="subject" id="subject" class="form-control">

            </div>
            
            <div class="form-group">
                <label name="message">Message:</label>
                <textarea name="message" id="message" class="form-control"></textarea>

            </div>

            <input type="submit" value="Send Message" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
