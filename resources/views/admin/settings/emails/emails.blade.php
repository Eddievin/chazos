@php
    $current_link = "site_set";
@endphp


@extends('admin.settings.layouts.settings_master')


@section('settings-content')
<div class="col-span-4 min-w-0 p-4 px-10 bg-white shadow-md dark:bg-gray-800">
    <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
      Email
    </h4>

    <form class="save-mail-settings" method="POST" action="{{ route('admin.settings.save_email') }}">


        @csrf
        <label class="block text-sm mt-4">
            <span
                class="text-gray-700 dark:text-gray-400">Mail Host</span>
            <input type="text"
                class="settings-input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="MAIL_HOST"
                value="{{ env('MAIL_HOST') }}"
                placeholder="Mail Host">
        </label>
        <label class="block text-sm mt-4">
            <span
                class="text-gray-700 dark:text-gray-400">Mail Port</span>
            <input type="text"
                class="settings-input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="MAIL_PORT"
                value="{{ env('MAIL_PORT') }}"
                placeholder="Mail Port">
        </label>
        <label class="block text-sm mt-4">
            <span
                class="text-gray-700 dark:text-gray-400">Mail Username</span>
            <input type="text"
                class="settings-input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="MAIL_USERNAME"
                value="{{ env('MAIL_USERNAME') }}"
                placeholder="Mail Username">
        </label>
        <label class="block text-sm mt-4">
            <span
                class="text-gray-700 dark:text-gray-400">Mail Password</span>
            <input type="text"
                class="settings-input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="MAIL_PASSWORD"
                value="{{ env('MAIL_PASSWORD') }}"
                placeholder="Mail Password">
        </label>
        <label class="block text-sm mt-4">
            <span
                class="text-gray-700 dark:text-gray-400">Mail Admin Email</span>
            <input type="text"
                class="settings-input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="MAIL_ADMIN_EMAIL"
                value="{{ env('MAIL_ADMIN_EMAIL') }}"
                placeholder="Mail Admin Email">
        </label>
        <label class="block text-sm mt-4">
            <span
                class="text-gray-700 dark:text-gray-400">Mail From Address</span>
            <input type="text"
                class="settings-input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="MAIL_FROM_ADDRESS"
                value="{{ env('MAIL_FROM_ADDRESS') }}"
                placeholder="Mail From Address">
        </label>
        <label class="block text-sm mt-4">
            <span
                class="text-gray-700 dark:text-gray-400">Mail Encryption</span>
            <select
                class="settings-input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="MAIL_ENCRYPTION"
                value="{{ env('MAIL_ENCRYPTION') }}"
                placeholder="Mail Encryption">

                <option value="">None</option>
                <option value="tls">TLS</option>
                <option value="ssl">SSL</option>

            </select>
        </label>


        <div class="mt-5">
            <div class="flex flex-row justify-end">
                <button
                    class="flex items-center justify-between px-4 ml-2  py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg hover:shadow  focus:outline-none focus:shadow-outline-purple">
                    Cancel
                </button>
                <button type="button"
                    data-route-name="{{ route('admin.settings.save_email') }}"
                    class="save-email-button flex items-center justify-between px-4 ml-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Save
                </button>
            </div>
        </div>
    </form>


  </div>

@endsection
