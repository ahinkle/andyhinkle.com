<x-app>
    <x-slot name="seo">
        <title>Avoid Abstraction Until It's Clearly Necessary</title>
        <meta name="description"
            content="How over-engineering can kill your project and why you should avoid abstraction until it's clearly necessary." />
        <meta property="og:title" content="Avoid Abstraction Until It's Clearly Necessary" />
        <meta property="og:description"
            content="How over-engineering can kill your project and why you should avoid abstraction until it's clearly necessary." />
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "BlogPosting",
                "headline": "Avoid Abstraction Until It's Clearly Necessary",
                "datePublished": "2024-10-09T09:00:00+08:00",
                "dateModified": "2024-10-09T09:00:00+08:00",
            }
        </script>
        </script>
    </x-slot>

    <a href="/images/blog/overengineered.jpg" target="_blank">
        <img src="/images/blog/overengineered.jpg" alt="Avoid Abstraction Until It's Clearly Necessary - Over-Engineered"
            class="w-full mt-4 mx-auto max-w-3xl">
    </a>

    <h1 class="text-3xl md:text-5xl font-bold text-white text-center font-sans pt-4">Avoid Abstraction Until It's
        Clearly Necessary</h1>

    <p class="text-white/75 text-center text-sm py-2 font-sans">October 9, 2024</p>

    <div class="max-w-3xl mx-auto mt-8">
        <p class="text-white/85 text-lg text-left">
            We're often drawn to best practices like code reuse, separation of concerns, and
            maintainability. But there's
            a fine line between helpful abstraction and over-engineering. One common pitfall I see is the tendency to
            extract even
            the smallest pieces of logic into service classes, helpers, or other abstractions when it's not actually
            necessary.
        </p>

        <p class="text-white/85 text-lg mt-4">
            For example, integrating a single third-party service API into your application. I've seen codebases where
            the instinct is to
            immediately create a service class for the API calls. The problem with this approach is that it introduces
            another layer of
            abstraction that forces anyone reading or maintaining the code to dig deeper just to understand what's going
            on.
            Instead of making things easier to manage, this over-extraction often leads to unnecessary complexity.
        </p>

        <h2 class="text-2xl md:text-4xl font-bold text-white text-center font-sans my-8">
            Clarity Over Complexity
        </h2>

        <p class="text-white/85 text-lg mt-4">
            When you extract too soon or without a compelling reason, you're essentially hiding simple, explicit code
            behind multiple layers. Instead of writing:
        </p>

        <pre>
        <x-torchlight-code language='php'>
            $response = $this->httpClient->get('https://api.example.com/resource');
        </x-torchlight-code>
        </pre>

        <p class="text-white/85 text-lg mt-4">
            You might see something like this:
        </p>

        <pre>
        <x-torchlight-code language='php'>
           $response = $this->apiService->fetchResource();
        </x-torchlight-code>
        </pre>

        <p class="text-white/85 text-lg mt-4">
            On the surface, this looks clean. But to understand what's really happening,
            you have to open up the
            <code class="bg-gray-900 p-1 rounded-md text-white text-sm">ApiService</code>
            class and trace through multiple layers just to see what parameters are being passed or how the request is
            structured.
        </p>

        <p class="text-white/85 text-lg mt-4">
            You dig into the <code class="bg-gray-900 p-1 rounded-md text-white text-sm">ApiService</code> class and
            find another abstraction layer that delegates the actual HTTP request.
            There is an exception handler if you don't have a token in your environment file.
        </p>

        <p class="text-white/85 text-lg mt-4">
            I'm not sure about you, but I can't recall the last time I found that exception helpful. The API itself
            informs you when a token is missing. It's unnecessary noise.
        </p>

        <p class="text-white/85 text-lg mt-4">
            This is where <strong>YAGNI</strong> <span class="italic">("You Aren’t Gonna Need It")</span> comes into
            play. The principle of YAGNI reminds us not to
            build for hypothetical future needs. If your interaction with this API is straightforward and limited to a
            few calls, why build an abstraction layer now?
            Keep it simple until the need for complexity arises.
        </p>

        <h2 class="text-2xl md:text-4xl font-bold text-white text-center font-sans my-8">
            Don't Fight The Framework
        </h2>

        <p class="text-white/85 text-lg mt-4">
            Frameworks like Laravel already offer many tools and conventions to handle common tasks like API
            integration.
            Fighting the framework by adding unnecessary abstractions or custom layers often leads to more code, more
            complexity, and more room for error.
        </p>

        <p class="text-white/85 text-lg mt-4">
            If your framework provides an easy, clear way to handle an API request, there's no need to reinvent the
            wheel by adding service classes or custom abstractions. Laravel, for example, offers Http client facades
            that handle API
            calls in a straightforward way:
        </p>

        <pre>
        <x-torchlight-code language='php'>
           $response = Http::get('https://api.example.com/resource');
        </x-torchlight-code>
        </pre>

        <p class="text-white/85 text-lg mt-4">
            This is clear, readable, and easy to maintain. The more you align with the framework's built-in tools, the
            less code you have to write,
            and the less room there is for bugs or maintenance headaches. The goal should be to leverage the framework,
            not fight it.
        </p>

        <h2 class="text-2xl md:text-4xl font-bold text-white text-center font-sans my-8">
            Not to be confused with "Never Abstract", but only when it's obviously necessary
        </h2>

        <p class="text-white/85 text-lg mt-4">
            The key is balance. If you're only working with a service API in a few places, there's no need to create a
            separate service class.
            Instead, keep the logic where it belongs, in a clear and explicit manner. You can always refactor later if
            the complexity grows.
            Over-extraction leads to more confusion and slows down development, as anyone reading your code is forced to
            dig through layers of abstractions for no real benefit.
        </p>

        <p class="text-white/85 text-lg mt-4">
            However, if you find yourself touching that API in multiple contexts, maybe handling retries, dynamic
            authentication
            tokens, or conditional logic, then by all means, create an abstraction to centralize that logic. But be
            mindful not to over-engineer early on—stick to YAGNI until it becomes clear that more structure is
            necessary.
        </p>

        <p class="text-white/85 text-lg mt-4">
            Before you abstract, ask yourself if the added complexity is truly necessary. Keep your code explicit and
            easy to follow, and don’t fight the framework’s built-in tools unless you have a good reason to.

        <p class="text-white/85 text-lg mt-4">
            Remember YAGNI: you aren’t gonna need it—until you actually do. By keeping things simple and leveraging what
            the framework offers, you’ll avoid the trap of over-engineering and keep your codebase more maintainable for
            the long term.
        </p>

        <p class="text-white/85 text-lg mt-4">
            Cheers
        </p>
</x-app>
