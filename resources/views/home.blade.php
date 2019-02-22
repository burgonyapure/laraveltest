@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @if ($user = Auth::user())
                        {{Auth::user()->name}}'s dashboard.
                    @else
                        <p>This is the Users dashboard.</p>
                        <p>More info will be shown if you log in.</p>
                    @endif
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($user = Auth::user())
                            <div>You are logged in with the following credentials:
                            <strong>
                                <ul class="list-group">
                                    <li class="list-group-item border-0">Name: {{Auth::user()->name}}</li>
                                    <li class="list-group-item border-0">E-mail: {{Auth::user()->email}}</li>
                                    @if(Auth::user()->email_verified_at === null)
                                        <li class="list-group-item border-0">Your E-mail is not verified. Verify request: <a href="{{ url('newemailreq') }}">here</a> </li>
                                    @elseif(Auth::user()->email_verified_at != null)
                                        <li class="list-group-item border-0">Your Email has been verified.</li>
                                    @endif
                                </ul>
                            </strong>
                            </div>
                    @elseif($user = Auth::guest())
                        <div>You are <strong>not</strong> logged in!</div>
                    @else
                        <div class="alert alert-danger">There was some error during your request.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
