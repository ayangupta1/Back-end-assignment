@extends("dashboard.layout")

@section("content")
<livewire:dashboard.post-editor :post="request()->route()->parameters(['id'])" />
@endsection
