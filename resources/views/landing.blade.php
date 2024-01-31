<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Breezy's Book Giveaway</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- Stylesheet -->
    @vite('resources/css/app.css')
</head>

<body class="bg-breezy-background">
    @if(session('success'))
    <div class="rounded-md bg-green-50 p-4 m-4 border border-green-700">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-green-800">Books Request Received</h3>
                <div class="mt-2 text-sm text-green-700">
                    <p>{!! session('success') !!}</p>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if ($errors->any())
        <div class="rounded-md bg-red-50 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-red-800">There were {{ $errors->count() }} errors with your submission</h3>
                    <div class="mt-2 text-sm text-red-700">
                        <ul role="list" class="list-disc space-y-1 pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div>
        <div class="lg:flex flex-row lg:space-x-4">
            <div class="flex lg:basis-1/3 justify-center lg:p-4 rounded-b-3xl lg:rounded-bl-none shadow-lg shadow-black" style="background-color: #34579b;">
                <img src="/images/breezybooks-outlined.png" >
            </div>
            <div class="flex flex-col w-full justify-center mt-4 px-4 lg:mt-none">
                <h2 class="text-4xl text-center font-bold tracking-tight sm:text-6xl">Build Your Book Collection for Next to Nothing!</h2>
                <p class="mt-6 text-lg text-center lg:px-48 leading-8 text-gray-800"><strong>Breezy is giving away the books he already read.</strong> They
                    need a good home. If you'd like to pick up some gently used books to add to your collection, get on our mailing
                    list! We will send you updates of listings, and tell you how to claim your books!
                </p>
            </div>
        </div>
        <div class="lg:flex lg:flex-row lg:mt-8 items-center lg:space-x-4">
            <div class="flex flex-col mx-4 items-center lg:basis-2/3">
                <div class="bg-white shadow sm:rounded-lg w-full">
                    <div class="px-4 py-5 sm:p-6">
                        <form class="lg:flex lg:flex-row items-center px-4" method="POST" action="{!! route('join-mailing-list') !!}">
                            @csrf
                            <div class="flex flex-col items-center w-full">
                                <div class="flex flex-col lg:flex-row justify-center">
                                    <div>
                                        <label class="text-base font-semibold text-gray-900">Topics</label>
                                        <p class="text-sm text-gray-500">Which topics are you interested in?</p>
                                        <fieldset class="mt-4">
                                        <legend class="sr-only">Topics</legend>
                                        <div class="space-y-4 sm:flex sm:items-center sm:space-x-10 sm:space-y-0">
                                            @foreach($topics as $key => $topic)
                                            <div class="flex items-center">
                                                <input id="{{ $key }}" name="topics[]" type="checkbox" @if($loop->first)checked @endif value="{{ $key }}" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                <label for="{{ $key }}" class="ml-3 block text-sm font-medium leading-6 text-gray-900">{{ $topic }}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="w-full lg:flex mt-4 lg:flex-row lg:content-center lg:items-center lg:w-3/4 tw-email-input">
                                    <div class="w-full relative rounded-md shadow-sm">
                                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                        </div>
                                        <input type="email" name="email" id="email" class="w-full rounded-md border-0 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="you@example.com">
                                    </div>
                                </div>
                                <div class="relative flex items-start mt-2">
                                    <div class="flex h-6 items-center">
                                        <input id="contributor" aria-describedby="comments-description" name="contributor" type="checkbox" value="1" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    </div>
                                    <div class="ml-3 text-sm leading-6">
                                        <label for="contributor" class="font-medium text-gray-900">I also have books</label>
                                        <span id="comments-description" class="text-gray-500"><span class="sr-only">I have books to contribute.</span>that I would like to contribute.</span>
                                    </div>
                                </div>
                                <button type="submit" class="w-full lg:w-auto lg:ml-2 mt-4 lg:mt-0 rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Show Me Some Books!</button>
                            </div>
                        </form>
                    </div>
                </div>
                <p class="mt-6 text-lg text-center leading-8 text-gray-800">Our bookshelves are filling up, and it's time to make some room for the next gang of books.</p>
            </div>
            <div class="flex justify-center mt-4 lg:mt-none">
                <img src="/images/books.png" >
            </div>
        </div>
        <div class="mt-6 text-lg text-center leading-8 text-gray-800">
            <p></p>
        </div>
    </div>
</body>

</html>
