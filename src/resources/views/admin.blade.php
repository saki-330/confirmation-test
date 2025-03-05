@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin-form__content">
    <div class="admin-form__heading">
        <h2>Admin</h2>
    </div>
    

    
    <div class="admin-table">
        <table class="admin-table__inner">
            <tr class="admin-table__row">
                <th class="admin-table__header"></th>
                <th class="admin-table__header"></th>
                <th class="admin-table__header"></th>
                <th class="admin-table__header"></th>
            </tr>
            <tr class="admin-table__row">
                <td class="admin-table__item"></td>
                <td class="admin-table__item"></td>
                <td class="admin-table__item"></td>
                <td class="admin-table__item"></td>
            </tr>
        </table>

    
</div>

@endsection