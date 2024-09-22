<x-app>
    <x-slot name="seo">
        <title>Hey Laravel Team!</title>
    </x-slot>

    <div class="max-w-3xl mx-auto mt-8 grid gap-y-8">
        <h1 class="text-3xl md:text-5xl font-bold text-white text-center font-sans">Hey Laravel Team 👋</h1>

        <p class="text-white text-lg">
            I'm <a href="https://twitter.com/andyhnk" class="text-blue-500/75" target="_blank"
                rel="noopener noreferrer">Andy Hinkle</a>
            and I'm a developer from Southern Indiana.
        </p>

        <p class="text-white text-lg">
            I'm excited to apply for the Technical Support Engineer position. My passion for helping others with my deep
            experience in Laravel and technical problem-solving, makes this role feel like the perfect fit.
        </p>

        <p class="text-white text-lg">
            My journey with Laravel started about ten years ago, shortly
            after the release of Laravel 5.1. I have attended the past 4 Laracon US conferences. I've met so many great
            people and I've learned so much
            from the talks and getting to know the community.
        </p>

        <p class="text-white text-lg">
            My first Laracon was in Chicago in 2018. It was at this moment I knew I wanted to be a part of this
            community. Everyone was so welcoming and I felt like I was a part of something special.
        </p>

        <img src="/images/andy-hinkle-laracon-us-2018.jpg" alt="Andy Hinkle at Laracon US 2018"
            class="w-[500px] h-[750px] object-cover mt-4 mx-auto" />

        <p class="text-white text-lg">
            Before coming a developer, I started my career working in theme parks — it was my first job and I moved my
            way up through the ranks.
        </p>

        <p class="text-white text-lg">
            Working at a theme park taught me lessons about customer service and collaborating with others. I’ve always
            loved helping people and solving problems, which is why I’m so passionate about Laravel – it's all about
            solving problems and making developers' lives easier.
        </p>

        <img src="/images/andy-hinkle-working-at-holiday-world-2016.JPG" alt="Andy Hinkle working at Holiday World"
            class="w-[600px] h-[750px] object-cover mt-4 mx-auto" />

        <p class="text-white text-lg">
            Here I am in the summer of 2014, training a supervisory team on how to safely evacuate a roller coaster in
            case of an emergency (yes, we were at the very top!) - Whether it’s improving processes or streamlining
            solutions, I’m always looking for ways to find improvements to processes – even if that means climbing to
            the top of a roller coaster!
        </p>

        <p class="text-white text-lg">
            When I was managing the team, I noticed we were doing many things by hand such as scheduling and tracking
            certifications, I decided to learn how to code so I could automate some of the tasks we were doing. I
            started with PHP and then I found Laravel. I've been hooked ever since.
        </p>

        <p class="text-white text-lg">
            I taught myself how to code by building a Laravel application- with the help of
            <a href="https://laracasts.com/" class="text-blue-500/75" target="_blank" rel="noopener noreferrer">Jeffrey
                Way</a> of course. It was a huge success and saved us so much time. I enjoyed it so much that I decided
            to make a career change and become a full time developer.
        </p>

        <p class="text-white text-lg">
            Today, I work as a senior developer at an agency called <a href="https://grayloon.com/"
                class="text-blue-500/75" target="_blank" rel="noopener noreferrer">Gray Loon Marketing Group</a>. I've
            worked on a variety of projects from small business websites to large enterprise applications. I work
            directly with clients and other developers to build custom solutions that meet their needs.
        </p>

        <p class="text-white text-lg">
            I love discovering new things and sharing knowledge with others. When I come across something that's
            undocumented, I see it as an opportunity to give back to the community and teach others. I've contributed
            around 50 accepted PRs to the Laravel documentation - here are a few examples:
        </p>

        <ul class="text-white text-lg list-disc list-inside">
            <li><a href="https://github.com/laravel/docs/pull/9141" class="text-blue-500/75" target="_blank"
                    rel="noopener noreferrer">[10.x] Add Number Utility, #9141</a></li>
            <li><a href="https://github.com/laravel/docs/pull/9118" class="text-blue-500/75" target="_blank"
                    rel="noopener noreferrer">[10.x] Add assertBatchCount(), assertNothingBatched(), #9118</a></li>
            <li><a href="https://github.com/laravel/docs/pull/9223" class="text-blue-500/75" target="_blank"
                    rel="noopener noreferrer">[10.x] Session Blade Directive, #9223</a></li>
        </ul>

        <p class="text-white text-lg">
            I've also made several contributions to the Laravel framework:
        </p>

        <a href="https://github.com/laravel/framework/pull/30653" class="text-blue-500/75 text-lg" target="_blank"
            rel="noopener noreferrer">[6.x] Allow explicit Model definitions in database rules, #30653</a>

        <p class="text-white text-lg">
            Previously, we could only use validation rules with the qualifying database table. With this accepted PR, it
            allowed the use of the model name instead of the table name. This was a great quality of life improvement
            for developers.
        </p>

        <pre class="-mt-4">
        <x-torchlight-code language='php'>
        // Before
        $request->validate([
            'email' => 'unique:users,email_address',
        ]);

        // After
        $request->validate([
            'name' => 'unique:App\Models\User,email_address',
        ]);
        </x-torchlight-code>
        </pre>

        <a href="https://github.com/laravel/framework/pull/45153" class="text-blue-500/75 text-lg -mt-10"
            target="_blank" rel="noopener noreferrer">[9.x] Add Policies to Model Show Command #45153</a>

        <p class="text-white text-lg -mt-4">
            This PR added the ability to show policies for a model when using the
            <code class="bg-gray-900 p-1 rounded-md text-white text-sm">php artisan model:show</code> command
            . This helped developers understand the policies that were associated with a model.
        </p>

        <p class="text-white text-lg">
            When I saw the job posting for the Technical Support Engineer position, It felt like the perfect fit for me.
            I love helping people and solving problems.
        </p>

        <p class="text-white text-lg">
            When I saw the Technical Support Engineer position, it felt like the perfect opportunity to combine my love
            for Laravel, helping others, and solving problems. I'm excited about the chance to support both the
            community and the team.
        </p>

        <p class="text-white text-lg">
            Please feel free to reach out to me at <a href="mailto:ahinkle10@gmail.com" class="text-blue-500/75">
                ahinkle10@gmail.com</a>. I look forward to the opportunity!
        </p>

        <p class="text-white text-lg">
            Sincerely,
            <br>
            Andy Hinkle
        </p>

    </div>
</x-app>
