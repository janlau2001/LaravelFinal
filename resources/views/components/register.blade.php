<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-40 w-auto" src="https://media.istockphoto.com/id/1184299091/vector/mouse-connected-to-a-book-icon-trendy-vector-thin-line-illustration-for-concepts-of-online.jpg?s=612x612&w=0&k=20&c=lm7d-y6L6tj35ETOedsG-hLL1tU9D1FzzRbZ-y3LmaM=" alt="Your Company">
      <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Account Registration</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="/register" method="POST">
        @csrf
        <div>
            <label for="email" class="block text-sm/6 font-medium text-gray-900">First Name</label>
            <div class="mt-2">
              <input type="name" name="name" id="name" autocomplete="name" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            </div>
        </div>
        <div>
          <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
          <div class="mt-2">
            <input type="email" name="email" id="email" autocomplete="email" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
          </div>
          <div class="mt-2">
            <input type="password" name="password" id="password" autocomplete="current-password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>

        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-gray-400 px-3 py-1.5 text-sm/7 font-semibold text-gray-800 shadow-sm hover:bg-black hover:text-white transition duration-300 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
        </div>
      </form>

      <p class="mt-10 text-center text-sm/6 text-gray-500">
        Already have an account?
        <a href="/login" class="font-semibold text-indigo-600 hover:text-indigo-500">LOGIN NOW!</a>
        <br>
        <a href="/dashboard" class="font-semibold text-gray-500 hover:text-black transition duration-300 ease-in-out">Back to Home Page</a>
      </p>
    </div>
  </div>
