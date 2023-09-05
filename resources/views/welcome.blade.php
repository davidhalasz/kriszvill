<x-guest-layout>
    @include('components.cover')
    @include('components.szolgaltatasok')
    @include('components.rolam')
    <livewire:send-email-form />
    @include('components.footer')
</x-guest-layout>
