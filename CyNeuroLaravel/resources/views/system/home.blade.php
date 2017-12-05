@extends('system.layouts.header')
@section('content')

    <!-- Services -->
    <section class="bg-light" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-heading">CyNeuro Web Portal</h3>
                    <h3 class="section-subheading text-muted"> CyNeuro will spur computational and cyber neuro research at Mizzou and collaborator institutions via (i) the development of ‘free’ cyber and software big data tools for neuroscience research, and (ii) facilitation of interactions among physical sciences faculty with big data expertise (engineering, math, statistics, physics) and wet-lab, behavioral and clinical neuro faculty with big data ‘needs’. </h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      {{--<i class="fa fa-database fa-stack-1x fa-inverse"></i>--}}
                      <i class="fa fa-share-alt fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Data Access</h4>
                    <p class="text-muted">
                        CyNeuro provides friendly user control panel that
                        user could create the group and share the data with group members.
                        It supports connecting to and accessing to the CyVerse Data Store that
                        allows you to share your data instantly with other users.
                    </p>
                </div>

                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Analytics</h4>
                    <p class="text-muted">
                        CyNeuro has a useful workflow that is developed for neuroscience.
                        To increase the speed of research, CyNeuro uses high-performance computing (HPC) system such as Xsede, pegasus and amazon AWS.
                    </p>
                </div>

                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Resources</h4>
                    <p class="text-muted">
                        CyNeuro gathered a series of related projects and tools to build a community in neuroscience.
                        <a class="text-addition_primary" href="{{ route('system.about.related_projects') }}">Read more.</a>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="section-heading">Upcoming events</h3>
                    <h3 class="section-subheading text-muted"> </h3>
                </div>
                <div class="col-md-6 text-right">
                    <button id="close-image">
                        <img src="{{ asset('jscss/custom/img/event.kickoff.logo.png') }}" width="150" height="150">
                    </button>
                </div>
                <div class="col-md-6">
                    <a class="text-addition_primary" href="{{ route('system.event.bigdata_syposium_page') }}"><b>Neuro Big-data Symposium</b></a>
                    <p>October 6, 2017, Friday in 572 Life Sciences Center</p>
                    {{--<small>--}}
                        {{--To spur computational and cyber neuro research at Mizzou via (i) the development of ‘free’--}}
                        {{--cyber and software big data tools for neuroscience research, and (ii) facilitation of--}}
                        {{--interactions among physical sciences faculty with big data expertise (engineering, math,--}}
                        {{--statistics, physics) and wet-lab, behavioral and clinical neuro faculty with big data ‘needs’.--}}
                    {{--</small>--}}
                </div>
            </div>
        </div>
    </section>




@endsection