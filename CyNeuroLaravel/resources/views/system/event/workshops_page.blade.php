@extends('system.layouts.header')
@section('content')



    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center ">
                <h3>Workshops</h3>
            </div>
            <div class="col-md-12 ">

                <ul>
                    <li>
                        <a href="{{ route('system.event.workshops.Workshop_2008_NeuroscienceResearchersPage') }}">
                            <b>Summer 2018 Workshops for Neuroscience Researchers and Cyberinfrastructure Engineers</b>
                        </a>
                        <p>
                            Presented by Satish Nair and Prasad Calyam
                        </p>
                    </li>
                </ul>


            </div>

        </div>
    </div>



@endsection
@section('javascript')

@endsection