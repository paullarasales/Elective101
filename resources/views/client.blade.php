@extends('layout.layout')

@section('page_title', 'Client')

@section('content')
<div class="flex flex-col items-center justify-center">
    <table class="border border-collapse">
        <tr>
            <th class="border text-white">ClientID</th>
            <th class="border text-white">Fname</th>
            <th class="border text-white">Lname</th>
            <th class="border text-white">ContactNo</th>
            <th class="border text-white">EmailAddress</th>
        </tr>
        @isset($client)
            @foreach ($client as $singleClient)
                <tr>
                    <td class="border text-white">{{ $singleClient["ClientID"] }}</td>
                    <td class="border text-white">{{ $singleClient["Fname"] }}</td>
                    <td class="border text-white">{{ $singleClient["Lname"] }}</td>
                    <td class="border text-white">{{ $singleClient["ContactNo"] }}</td>
                    <td class="border text-white">{{ $singleClient["EmailAddress"] }}</td>
                </tr>
            @endforeach
        @else
            @foreach ($clientJPS as $singleClient)
                <tr>
                    <td class="border text-white">{{ $singleClient["ClientID"] }}</td>
                    <td class="border text-white">{{ $singleClient["Fname"] }}</td>
                    <td class="border text-white">{{ $singleClient["Lname"] }}</td>
                    <td class="border text-white">{{ $singleClient["ContactNo"] }}</td>
                    <td class="border text-white">{{ $singleClient["EmailAddress"] }}</td>
                </tr>
            @endforeach
        @endisset
    </table>
    
    @isset($message)
        <p class="text-white">{!! $message !!}</p>
    @endisset
</div>   
@endsection
