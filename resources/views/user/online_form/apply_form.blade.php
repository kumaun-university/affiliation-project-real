@extends('main')

@section('stylesheets')
    
@endsection

@section('content')


    <div class="card">
        <div class="card-header">
            <h3>PART - 1</h3>
        </div>
        <div class="card-body">
            {{ Form::open(array('url' => '')) }}
            <ol>
                <li class="form-group">
                    {{Form::label('institute_name', __('Name of College / Education Institute'))}}
                    {{Form::text($name='institute_name', $value = null, $attributes = array('class'=>'form-control'))}}
                </li>
                <li class="form-group">
                    {{Form::label('institute_address', __('Full address of college / institution'))}}
                    {{Form::text($name='institute_address', $value = null, $attributes = array('class'=>'form-control'))}}
                </li>
                <li class="form-group">
                    {{Form::label('establish_year', __('Year of establishment of college / institution'))}}
                    {{Form::number($name='establish_year', $value = null, $attributes = array('class'=>'form-control'))}}
                </li>
                <li class="form-group">
                    {{Form::label('website', __('Website / e-mail of college / institute'))}}
                    {{Form::url($name='website', $value = null, $attributes = array('class'=>'form-control'))}}
                </li>
                <li class="form-group">
                    {{Form::label('telephone', __("College / Institution telephone"))}}
                    {{Form::label('telephone', __("(including contact person's name and mobile number)"))}}
                    {{Form::number($name='telephone', $value = null, $attributes = array('class'=>'form-control'))}}
                </li>
                <li class="form-group">
                    {{Form::label('status', __('Status of cover from Section 2(f)/12(B) of U.G.C Act'))}}
                    {{Form::text($name='status', $value = null, $attributes = array('class'=>'form-control'))}}
                </li>
                <li class="form-group">
                    {{Form::label('institute_nature', __('Nature of college / institution'))}}
                    <ol>
                        <li class="form-group">
                            {{Form::label('status_state', __('The state'))}}
                            {{Form::text($name='status_state', $value = null, $attributes = array('class'=>'form-control'))}}
                        </li>
                        <li class="form-group">
                            {{Form::label('status_aided', __('Aided'))}}
                            {{Form::text($name='status_aided', $value = null, $attributes = array('class'=>'form-control'))}}
                        </li>
                        <li class="form-group">
                            {{Form::label('status_private', __('Private'))}}
                            {{Form::text($name='status_private', $value = null, $attributes = array('class'=>'form-control'))}}
                        </li>
                        <li class="form-group">
                            {{Form::label('status_other_institute', __('Other (please clarify)'))}}
                            {{Form::text($name='status_other', $value = null, $attributes = array('class'=>'form-control'))}}
                        </li>
                    </ol>
                </li>
                <li class="form-group">
                    {{Form::label('proposer_name', __('Proposer name'))}}
                    {{Form::text($name='proposer_name', $value = null, $attributes = array('class'=>'form-control'))}}
                </li>
                <li class="form-group">
                    {{Form::label('proposer_address', __('Address and telephone address of the proposer'))}}
                    {{Form::text($name='proposer_address', $value = null, $attributes = array('class'=>'form-control'))}}
                </li>
                <li class="form-group">
                    {{Form::label('proposer_nature', __('Nature of the proposer institution'))}}
                    <ol>
                        <li class="form-group">
                            {{Form::label('status_society', __('Society'))}}
                            {{Form::text($name='status_society', $value = null, $attributes = array('class'=>'form-control'))}}
                        </li>
                        <li class="form-group">
                            {{Form::label('status_trustee', __('Trustee'))}}
                            {{Form::text($name='status_trustee', $value = null, $attributes = array('class'=>'form-control'))}}
                        </li>
                        <li class="form-group">
                            {{Form::label('status_other_proposer', __("Other (Please clarify)"))}}
                            {{Form::label('status_other_proposer', __("(Attend an updated certified copy of Proposer's Manual)"))}}
                            {{Form::text($name='status_other_proposer', $value = null, $attributes = array('class'=>'form-control'))}}
                        </li>
                    </ol>
                </li>
                <li class="form-group">
                    {{Form::label('proposer_register_status', __('Status of registration of proposer institution'))}}
                    {{Form::label('proposer_register_status', __('(including certificate)'))}}
                    <ol>
                        <li class="form-group">
                            {{Form::label('register_status_number', __('registration number'))}}
                            {{Form::text($name='register_status_number', $value = null, $attributes = array('class'=>'form-control'))}}
                        </li>
                        <li class="form-group">
                            {{Form::label('register_status_date', __('Date of registration'))}}
                            {{Form::date($name='register_status_date', $value = null, $attributes = array('class'=>'form-control'))}}
                        </li>
                        <li class="form-group">
                            {{Form::label('register_status_validity', __('Validity period of registration'))}}
                            {{Form::number($name='register_status_validity', $value = null, $attributes = array('class'=>'form-control'))}}
                        </li>
                    </ol>
                </li>
                <li class="form-group">
                    {{Form::label('course_details', __('Details of courses run in college / institute'))}}
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td scope="col">{{__('S.no.')}}</td>
                                    <td scope="col">{{__('Name of course')}}</td>
                                    <td scope="col">{{__('Duration of affiliation')}}</td>
                                    <td scope="col">{{__('Students in the updated academic year (year)')}}</td>
                                </tr>
                            </thead>
                            <tbody id="dynamic-table">
                                <tr>
                                    <td scope="row">1</td>
                                    <td>
                                        {{Form::text($name='course_name[]', $value = null, $attributes = array('class'=>'form-control'))}}
                                    </td>
                                    <td>
                                        {{Form::date($name='affiliation_duration[]', $value = null, $attributes = array('class'=>'form-control'))}}
                                    </td>
                                    <td>
                                        {{Form::number($name='current_number_of_students[]', $value = null, $attributes = array('class'=>'form-control'))}}
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info" id="add-row">Add</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li class="form-group">
                    {{Form::label('sanction_details', __('Details of sanction received from Statutory '))}}
                    {{Form::label('sanction_details', __('/ Regulatory Body for operated courses / topics '))}}
                    {{Form::label('sanction_details', __('(attach copy of acceptance letter)'))}}
                    {{Form::text($name='sanction_detail', $value = null, $attributes = array('class'=>'form-control'))}}
                </li>
                <li class="form-group">
                    {{Form::label('temp_affiliation_details', __('Details of temporary affiliation received from VV for operated courses'))}}
                    {{Form::label('temp_affiliation_details', __('(enclosed copy of full acceptance letter)'))}}
                    <ol>
                        <li class="form-group">
                            {{Form::label('temp_affiliation_first', __('For the first time in which semester a temporary affiliation was received for the course'))}}
                            {{Form::text($name='', $value = null, $attributes = array('class'=>'form-control'))}}
                        </li>
                        <li class="form-group">
                            {{Form::label('temp_affiliation_year', __('Year of interruption in temporary affiliation, if any'))}}
                            {{Form::number($name='', $value = null, $attributes = array('class'=>'form-control'))}}
                        </li>
                    </ol>
                </li>
                <li class="form-group">
                    {{Form::label('number_of_seat', __('In the case of seat increase in the course, the number of seats approved in advance (attach the copy of approved letter)'))}}
                    {{Form::number($name='number_of_seat', $value = null, $attributes = array('class'=>'form-control'))}}
                </li>
                <li class="form-group">
                    {{Form::label('average_pass_per', __('Average examination of the last 3 years of the courses run in college / institution (pass percentage)'))}}
                    {{Form::number($name='average_pass_per', $value = null, $attributes = array('class'=>'form-control'))}}
                </li>
                <li class="form-group">
                    {{Form::label('condition_of_compilance', __('The condition of compliance with conditions laid down in the conditional affiliation provided earlier in college / institution.'))}}
                    {{Form::text($name='condition_of_compilance', $value = null, $attributes = array('class'=>'form-control'))}}
                </li>
            </ol>
            <center>
                <button type="button" class="btn btn-secondary">Clear</button>
                <button type="button" class="btn btn-primary">Next</button>
            </center>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3>PART - 2</h3>
        </div>
        <div class="card-body">
            <ol>
                <li class="form-group">
                    {{Form::label('$part2_field_name[0]', __("Purpose of submitting application form "))}}
                    {{Form::label('$part2_field_name[0]', __("(Permanent affiliation / temporary affiliation / affiliation extension / seat increase of the course) "))}}
                    {{Form::label('part2_field_name[0]', __("(In case of seat increase, in the course of the course, the number of proposed seats should be mentioned)"))}}
                    {{Form::text($name='', $value = null, $attributes = array('class'=>'form-control'))}}
                </li>
                <li class="form-group">
                    {{Form::label('part2_field_name[1]', __('Academic session for which application has been submitted'))}}
                    {{Form::text($name='part2_field_name[1]', $value = null, $attributes = array('class'=>'form-control'))}}
                </li>
                <li class="form-group">
                    {{Form::label('part2_field_name[2]', __('Name of the Course whose temporary affiliation / permanent affiliation / affiliation has been applied for extension / seat increase'))}}
                    {{Form::text($name='part2_field_name[2]', $value = null, $attributes = array('class'=>'form-control'))}}
                </li>
                <li class="form-group">
                    {{Form::label('part2_field_name[3]', __('Name of statutory / non-institutional organization of course at all-India level'))}}
                    {{Form::text($name='part2_field_name[3]', $value = null, $attributes = array('class'=>'form-control'))}}
                </li>
            </ol>
            <center>
                <button type="button" class="btn btn-secondary">Clear</button>
                <button type="button" class="btn btn-primary">Next</button>
            </center>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3>PART - 3</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td scope="col">{{__('S.no.')}}</td>
                            <td scope="col">{{__('aadhar manko')}}</td>
                            <td scope="col">{{__('sanvandhik upvinayamak nikay')}}</td>
                            <td scope="col">{{__('padkrma ke manak')}}</td>
                            <td scope="col">{{__('Nirikshad samiti')}}</td>
                        </tr>
                        <tr>
                            <td scope="col">{{__('1')}}</td>
                            <td scope="col">{{__('2')}}</td>
                            <td scope="col">{{__('3')}}</td>
                            <td scope="col">{{__('4')}}</td>
                            <td scope="col">{{__('5')}}</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>
                                <b>Bhumi</b>
                                <ol>
                                    <li>uplabdh bhmi ka pta</li>
                                    <li>uplabdh bhmi ka pta</li>
                                    <li>uplabdh bhmi ka pta</li>
                                    <li>uplabdh bhmi ka pta</li>
                                </ol>
                            </td>
                            <td>
                                {{Form::textarea($name='course_name[]', $value = null, $attributes = array('class'=>'form-control'))}}
                            </td>
                            <td>
                                {{Form::textarea($name='affiliation_duration[]', $value = null, $attributes = array('class'=>'form-control'))}}
                            </td>
                            <td>
                                {{Form::textarea($name='current_number_of_students[]', $value = null, $attributes = array('class'=>'form-control'))}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>
                                <b>Bhumi</b>
                                <ol>
                                    <li>uplabdh bhmi ka pta</li>
                                    <li>uplabdh bhmi ka pta</li>
                                    <li>uplabdh bhmi ka pta</li>
                                    <li>uplabdh bhmi ka pta</li>
                                </ol>
                            </td>
                            <td>
                                {{Form::textarea($name='course_name[]', $value = null, $attributes = array('class'=>'form-control'))}}
                            </td>
                            <td>
                                {{Form::textarea($name='affiliation_duration[]', $value = null, $attributes = array('class'=>'form-control'))}}
                            </td>
                            <td>
                                {{Form::textarea($name='current_number_of_students[]', $value = null, $attributes = array('class'=>'form-control'))}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>
                                <b>Bhumi</b>
                                <ol>
                                    <li>uplabdh bhmi ka pta</li>
                                    <li>uplabdh bhmi ka pta</li>
                                    <li>uplabdh bhmi ka pta</li>
                                    <li>uplabdh bhmi ka pta</li>
                                </ol>
                            </td>
                            <td>
                                {{Form::textarea($name='course_name[]', $value = null, $attributes = array('class'=>'form-control'))}}
                            </td>
                            <td>
                                {{Form::textarea($name='affiliation_duration[]', $value = null, $attributes = array('class'=>'form-control'))}}
                            </td>
                            <td>
                                {{Form::textarea($name='current_number_of_students[]', $value = null, $attributes = array('class'=>'form-control'))}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">4</td>
                            <td>
                                <p>Mahavidhyalaya mai kratyarat faculty ka vivrad</p>
                            </td>
                            <td>
                                <div class="responsive-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <td>
                                                    padnam
                                                </td>
                                                <td>
                                                    padd ki sankya
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    profesor
                                                </td>
                                                <td>
                                                    {{Form::number($name='course_name[]', $value = null, $attributes = array('class'=>'form-control'))}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    profesor
                                                </td>
                                                <td>
                                                    {{Form::number($name='course_name[]', $value = null, $attributes = array('class'=>'form-control'))}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    profesor
                                                </td>
                                                <td>
                                                    {{Form::number($name='course_name[]', $value = null, $attributes = array('class'=>'form-control'))}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    profesor
                                                </td>
                                                <td>
                                                    {{Form::number($name='course_name[]', $value = null, $attributes = array('class'=>'form-control'))}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    profesor
                                                </td>
                                                <td>
                                                    {{Form::number($name='course_name[]', $value = null, $attributes = array('class'=>'form-control'))}}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                            <td>
                                {{Form::textarea($name='affiliation_duration[]', $value = null, $attributes = array('class'=>'form-control'))}}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <center>
                <button type="button" class="btn btn-secondary">Clear</button>
                <button type="button" class="btn btn-primary">Next</button>
            </center>
        </div>
    </div>
    {{ Form::close() }}

@endsection

@section('scripts')
    
    {!! Html::script('js/applyform.js') !!}    
@endsection