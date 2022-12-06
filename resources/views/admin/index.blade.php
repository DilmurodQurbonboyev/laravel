@extends('admin.layouts.app')
@section('title')
    {{ M::t('Dashboard') }}
@endsection
@section('header')
{{--    <x-admin.breadcrumb :title="'Dashboard'" :breadcrumb="'admin'"/>--}}
@endsection
@section('content')
    <div class="row">
{{--        <x-admin.card icon='<i class="fab fa-elementor"></i>' title="{{ M::t('Menus') }}"--}}
{{--                      url="{{ route('menus.index') }}" value="{{ $totalMenus }}"></x-admin.card>--}}
{{--        <x-admin.card icon='<i class="far fa-newspaper"></i>' title="{{ M::t('News') }}"--}}
{{--                      url="{{ route('news.index') }}" value="{{ $totalLists->news }}"></x-admin.card>--}}
{{--        <x-admin.card icon='<i class="fa fa-link fa-lg"></i>' title="{{ M::t('Pages') }}"--}}
{{--                      url="{{ route('pages.index') }}" value="{{ $totalLists->pages }}"></x-admin.card>--}}
{{--        <x-admin.card icon='<i class="fab fa-weixin"></i>' title="{{ M::t('Answers') }}"--}}
{{--                      url="{{ route('answers.index') }}" value="{{ $totalLists->answers }}"></x-admin.card>--}}
{{--        <x-admin.card icon='<i class="fas fa-tv"></i>' title="{{ M::t('Useful') }}"--}}
{{--                      url="{{ route('useful.index') }}" value="{{ $totalLists->useful }}"></x-admin.card>--}}
{{--        <x-admin.card icon='<i class="fas fa-camera"></i>' title="{{ M::t('Photos') }}"--}}
{{--                      url="{{ route('photos.index') }}" value="{{ $totalLists->photos }}"/>--}}
{{--        <x-admin.card icon='<i class="fas fa-photo-video"></i>' title="{{ M::t('Video Gallery') }}"--}}
{{--                      url="{{ route('videos.index') }}" value="{{ $totalLists->videos }}"/>--}}
{{--        <x-admin.card icon='<i class="fas fa-users"></i>' title="{{ M::t('Managements') }}"--}}
{{--                      url="{{ route('managements.index') }}"--}}
{{--                      value="{{ $totalManagements }}"></x-admin.card>--}}
{{--        <x-admin.card icon='<i class="fas fa-notes-medical"></i>' title="{{ M::t('Illnesses') }}"--}}
{{--                      url="{{ route('illness.index') }}"--}}
{{--                      value="{{ $totalIllnesses ?? 0 }}"></x-admin.card>--}}
{{--        <x-admin.card icon='<i class="fas fa-hospital-user"></i>' title="{{ M::t('Establishments') }}"--}}
{{--                      url="{{ route('establishments.index') }}"--}}
{{--                      value="{{ $totalEstablishments ?? 0 }}"></x-admin.card>--}}
{{--        <x-admin.card icon='<i class="fas fa-users"></i>' title="{{ M::t('Users') }}"--}}
{{--                      url="{{ route('users.index') }}" value="{{ $totalUsers }}"></x-admin.card>--}}
    </div>
@endsection
