@foreach ($tableData as $data)
    @if($data['id'] == $urp)
        <h1>
            <scope="row">{{$data['id']}}
            {{$data['first_name']}}
            {{$data['last_name']}}
            {{$data['email']}}
        </h1>
    @endif
@endforeach
