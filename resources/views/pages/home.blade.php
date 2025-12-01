@extends('layout.master_layout')

@section('title')
Home Page 01
@endsection

@section('content')

<h1>Home Page</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, consectetur!</p>
@verbatim
    <div id="app">{{ message }}</div>
@endverbatim

@endsection



@push('scripts_files')
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<script>
  const { createApp, ref } = Vue

  createApp({
    setup() {
      const message = ref('Hello vue!')
      return {
        message
      }
    }
  }).mount('#app')
</script>
@endpush
@push('scripts_files')
    <script src="{{ asset('js/main.js') }}"></script>
@endpush
