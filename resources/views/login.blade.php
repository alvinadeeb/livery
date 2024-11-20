<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <style>
    body {
      background-image: linear-gradient(to right, #4e54c8, #8f94fb);
      background-size: cover;
      background-position: center;
    }
    .login-container {
      backdrop-filter: blur(20px);
      border-radius: 25px;
    }
  </style>
</head>
<body class="flex items-center justify-center h-screen">
  <div class="login-container bg-white bg-opacity-90 p-8 shadow-lg w-96">
    <h1 class="text-4xl font-bold text-indigo-600 text-center mb-6">
      Log In
    </h1>
    <form>
      <div class="mb-5">
        <label for="email" class="block text-sm font-semibold text-gray-800">Email Address</label>
        <input type="email" id="email" class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="you@example.com" required>
      </div>
      <div class="mb-5">
        <label for="password" class="block text-sm font-semibold text-gray-800">Password</label>
        <input type="password" id="password" class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="********" required>
      </div>
      <div class="flex items-center justify-between mb-5">
        <div>
          <input type="checkbox" id="remember" class="mr-2 leading-tight">
          <label for="remember" class="text-sm text-gray-700">Remember Me</label>
        </div>
        <a href="#" class="text-sm text-indigo-600 hover:underline">Forgot Password?</a>
      </div>
      <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-2 rounded-lg hover:bg-indigo-700 transition duration-200">
        Login
      </button>
    </form>
    <p class="mt-4 text-center text-sm text-gray-700">
      Don't have an account? <a href="#" class="text-indigo-600 hover:underline">Sign Up</a>
    </p>
    <div class="mt-6 flex justify-between">
      <hr class="flex-grow border-gray-300">
      <span class="mx-2 text-gray-500">or</span>
      <hr class="flex-grow border-gray-300">
    </div>
    <div class="mt-4">
      <button class="w-full bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700 transition duration-200">
        Login with Google
      </button>
      <button class="w-full bg-gray-800 text-white font-semibold py-2 rounded-lg hover:bg-gray-700 transition duration-200 mt-2">
        Login with Facebook
      </button>
    </div>
  </div>
</body>
</html>