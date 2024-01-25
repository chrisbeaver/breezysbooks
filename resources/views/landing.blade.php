<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Breezy's Book Giveaway</title>

  <!-- Stylesheet -->
  @vite('resources/css/app.css')
</head>

<body>
    <div>
        <div class="md:flex flex-row md:space-x-4">
            <div class="flex md:basis-1/3 justify-center md:p-4 rounded-b-3xl md:rounded-bl-none shadow-lg shadow-black" style="background-color: #34579b;">
                <img src="/images/breezybooks-outlined.png" >
            </div>
            <div class="flex flex-col w-full justify-center mt-4 px-4 md:mt-none">
                <h2 class="text-4xl text-center font-bold tracking-tight sm:text-6xl">Build Your Book Collection for Next to Nothing!</h2>
                <p class="mt-6 text-lg text-center md:px-48 leading-8 text-gray-800"><strong>Breezy is giving away the books he already read.</strong> They
                    need a good home. If you'd like to pick up some gently used books to add to your collection, get on our mailing
                    list! We will send you updates of listings, and tell you how to claim your books!
                </p>
            </div>
        </div>
        <div class="md:flex md:flex-row md:space-x-4">
            <div class="md:flex md:flex-row items-center md:basis-2/3 px-4">
                <div class="w-full md:flex md:flex-row md:content-center tw-email-input">
                    <div class="w-full relative mt-2 rounded-md shadow-sm">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                            </svg>
                        </div>
                        <input type="email" name="email" id="email" class="w-full rounded-md border-0 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="you@example.com">
                    </div>
                </div>
                <button type="button" class="w-full md:w-auto md:ml-2 rounded-md bg-indigo-600 px-3.5 py-2.5 mt-4 md:mt-none text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Send Me Some Books!</button>
            </div>
            <div class="flex justify-center w-full mt-4 md:mt-none">
                <img src="/images/breezy-books.png" >
            </div>
        </div>
        <div>
            <p>More stuf to say here.</p>
        </div>
    </div>
</body>

</html>
