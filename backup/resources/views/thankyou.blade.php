<x-layouts.page.bacancy :title="__('Dashboard')">
    <div class="fixed gap-4 top-0 bottom-0 start-0 end-0 z-40 h-full flex justify-center items-center flex-col text-center p-6 bg-bacancy-primary border rounded">
        <h2 class="md:text-5xl text-3xl text-white font-bold font-mono">Thank You!</h2>
        <p class="text-white mt-2 text-xl">Thanks for your query. Our representative will get in touch with you soon!</p>
        <a class="bg-black p-2 text-white rounded-md" href="{{ url()->previous() }}">Go to Home</a>
    </div>
    {{session()->forget('allow_success')}}
</x-layouts.page.bacancy>
