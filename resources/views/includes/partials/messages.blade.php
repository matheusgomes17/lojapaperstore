@if ($errors->any())
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 30px;">
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {!! $error !!}<br/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@elseif (session()->get('flash_success'))
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 30px;">
                <div class="alert alert-success">
                    @if(is_array(json_decode(session()->get('flash_success'), true)))
                        {!! implode('', session()->get('flash_success')->all(':message<br/>')) !!}
                    @else
                        {!! session()->get('flash_success') !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
@elseif (session()->get('flash_warning'))
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 30px;">
                <div class="alert alert-warning">
                    @if(is_array(json_decode(session()->get('flash_warning'), true)))
                        {!! implode('', session()->get('flash_warning')->all(':message<br/>')) !!}
                    @else
                        {!! session()->get('flash_warning') !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
@elseif (session()->get('flash_info'))
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 30px;">
                <div class="alert alert-info">
                    @if(is_array(json_decode(session()->get('flash_info'), true)))
                        {!! implode('', session()->get('flash_info')->all(':message<br/>')) !!}
                    @else
                        {!! session()->get('flash_info') !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
@elseif (session()->get('flash_danger'))
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 30px;">
                <div class="alert alert-danger">
                    @if(is_array(json_decode(session()->get('flash_danger'), true)))
                        {!! implode('', session()->get('flash_danger')->all(':message<br/>')) !!}
                    @else
                        {!! session()->get('flash_danger') !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
@elseif (session()->get('flash_message'))
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 30px;">
                <div class="alert alert-info">
                    @if(is_array(json_decode(session()->get('flash_message'), true)))
                        {!! implode('', session()->get('flash_message')->all(':message<br/>')) !!}
                    @else
                        {!! session()->get('flash_message') !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endif