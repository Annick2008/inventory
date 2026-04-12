<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 border shadow-sm sm:rounded-lg">

    @if (session('success'))
        <p class="text-green-500">{{ session('success') }}</p>
    @elseif($errors->any())
        <div class="alert alert-danger">
            <p>{{__ ("Error occurred")}}</p>
        </div>
    @endif

</div>
