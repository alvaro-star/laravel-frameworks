@extends('layout.app')

@section('estilo')
<script src="https://cdn.tailwindcss.com"></script>
@endsection

@section('content')
<div class="bg-indigo-100 py-6 md:py-12">
    <div class="container px-4 mx-auto">

        <div class="text-center max-w-2xl mx-auto grid place-items-center">
            <h1 class="text-3xl md:text-4xl font-medium mb-2">Get the header you needed for your awesome website.</h1>
            <a href="{{route('social.login', ['provider' => 'github'])}}" class="bg-indigo-600 text-white py-2 px-6 rounded text-xl mt-7 flex justify-center items-center w-1/4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="mx-1">
                    <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm2.218 18.616c-.354.069-.468-.149-.468-.336v-1.921c0-.653-.229-1.079-.481-1.296 1.56-.173 3.198-.765 3.198-3.454 0-.765-.273-1.389-.721-1.879.072-.177.312-.889-.069-1.853 0 0-.587-.188-1.923.717-.561-.154-1.159-.231-1.754-.234-.595.003-1.193.08-1.753.235-1.337-.905-1.925-.717-1.925-.717-.379.964-.14 1.676-.067 1.852-.448.49-.722 1.114-.722 1.879 0 2.682 1.634 3.282 3.189 3.459-.2.175-.381.483-.444.936-.4.179-1.413.488-2.037-.582 0 0-.37-.672-1.073-.722 0 0-.683-.009-.048.426 0 0 .46.215.777 1.024 0 0 .405 1.25 2.353.826v1.303c0 .185-.113.402-.462.337-2.782-.925-4.788-3.549-4.788-6.641 0-3.867 3.135-7 7-7s7 3.133 7 7c0 3.091-2.003 5.715-4.782 6.641z" />
                </svg>
                Github
            </a>
        </div>
    </div>
</div>
@endsection