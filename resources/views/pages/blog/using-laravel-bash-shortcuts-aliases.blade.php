<x-app>
    <x-slot name="seo">
        <title>Useful bash aliases for Laravel projects</title>
        <meta name="description"
            content="Bash shortcuts and aliases are a great way to speed up your workflow. They allow you to create custom commands that can be used to perform common tasks quickly and easily." />
    </x-slot>

    <p class="py-2 text-center font-sans text-sm text-white/75">July 10, 2024</p>
    <h1 class="text-center font-sans text-3xl font-bold text-white md:text-5xl">Useful bash aliases for Laravel projects
    </h1>

    <div class="mx-auto mt-8 max-w-3xl">
        <p class="text-wrap text-left text-lg text-white/85">
            Bash aliases are a great way to speed up your workflow. They allow you to create custom commands that can be
            used to perform common tasks quickly and easily.
        </p>

        <h2 class="mt-8 text-2xl font-bold text-white">Creating Aliases</h2>

        <p class="mt-2 text-wrap text-left text-lg text-white/85">
            Aliases are custom commands that you can create to perform common tasks. For example, you can create an
            alias to run your tests, migrate your database, or clear your cache.
        </p>

        <p class="mt-2 text-wrap text-left text-lg text-white/85">
            To create an alias, open your the <code
                class="rounded-md bg-gray-900 p-1 text-sm text-white">~/.bash_aliases</code>
            or the <code class="rounded-md bg-gray-900 p-1 text-sm text-white">~/.bashrc</code> file and add the
            following line:
        </p>

        <pre class="mt-2 rounded-md bg-gray-900 p-4 text-sm text-white">alias pa="php artisan"</pre>

        <p class="mt-2 text-wrap text-left text-lg text-white/85">
            Be sure to source the file after adding the alias by running the following command:
        </p>

        <pre class="mt-2 rounded-md bg-gray-900 p-4 text-sm text-white">source ~/.bash_aliases 

.. or source ~/.bashrc</pre>

        <p class="mt-2 text-wrap text-left text-lg text-white/85">
            Now you can run the <code class="rounded-md bg-gray-900 p-1 text-sm text-white">
                pa</code>
            command in your terminal to run any
            <code class="rounded-md bg-gray-900 p-1 text-sm text-white">
                php artisan</code> command. For example, you can run <code
                class="rounded-md bg-gray-900 p-1 text-sm text-white">pa migrate</code> to migrate your database.
        </p>

        <h2 class="mt-8 text-2xl font-bold text-white">Useful Aliases</h2>

        <p class="mt-2 text-wrap text-left text-lg text-white/85">
            I thought it would be fun to share some of the aliases I use in my Laravel projects and also source some
            from the community.
        </p>

        <p class="mt-2 text-wrap text-left text-lg text-white/85">
            Here are my personal aliases that I use in my projects:
        </p>

        <pre class="mt-2 rounded-md bg-gray-900 p-4 text-sm text-white" style="white-space: pre-wrap;">alias pa="php artisan"

alias tp="php artisan test -p"

alias mfs="php artisan migrate:fresh --seed"

alias c="composer"

alias cu="c update"

alias ci="c install"

alias gpo="git pull origin"

alias nah="git reset --hard;git clean -df"

alias t="phpunit"

alias tf="phpunit --filter"
</pre>

        <h3 class="mt-8 text-xl font-bold text-white">Aliases from the Community</h3>

        <h3 class="mt-8 text-xl font-bold text-white">Dries Vints</h3>

        <p class="mt-2 text-wrap text-left text-lg text-white/85">
            <a href="https://twitter.com/driesvints" class="text-blue-500/75">Dries Vints</a> is a Software Engineer at
            Laravel and has some great aliases that he uses in his projects.
            I found the <code class="rounded-md bg-gray-900 p-1 text-sm text-white">cfresh</code> alias to be
            particularly interesting for nuking your vendor directory and <code
                class="rounded-md bg-gray-900 p-1 text-sm text-white">composer.lock</code> file.
            Here are a few of my favorites:
        </p>

        <pre class="mt-2 rounded-md bg-gray-900 p-4 text-sm text-white" style="white-space: pre-wrap;">alias a="herd php artisan"
    
alias tinker="herd php artisan tinker"

alias seed="herd php artisan db:seed"

alias serve="herd php artisan serve"

alias cfresh="rm -rf vendor/ composer.lock && composer i"

alias wip="commit wip"

alias commit="git add . && git commit -m"</pre>

        <p class="mt-2 text-wrap text-left text-lg text-white/85">
            You can find more of Dries' aliases in his <a
                href="https://github.com/driesvints/dotfiles/blob/259a39721e07393479938ec330a599cfd2f5a2d3/aliases.zsh"
                class="text-blue-500/75" target="_blank" rel="noopener">aliases.zsh</a> file from the <a
                href="https://github.com/driesvints/dotfiles" class="text-blue-500/75" target="_blank"
                rel="noopener">driesvints/dotfiles</a> repository.
        </p>

        <h3 class="mt-8 text-xl font-bold text-white">Freek Van der Herten</h3>

        <p class="mt-2 text-wrap text-left text-lg text-white/85">
            <a href="https://freek.dev/" class="text-blue-500/75">Freek Van der Herten</a> is a developer at <a
                href='https://spatie.be/' class="text-blue-500/75">Spatie</a>,
            which is a company that has created hundreds of Laravel packages. You will likely have used one of their
            packages in your projects. Here are a few interesting aliases:
        </p>

        <pre class="mt-2 rounded-md bg-gray-900 p-4 text-sm text-white" style="white-space: pre-wrap;">alias a="php artisan"

alias cda="composer dump-autoload -o"

alias larastan="vendor/bin/phpstan analyse"

alias deploy='envoy run deploy'

alias pp="php artisan test --parallel"

alias sail='./vendor/bin/sail'

alias glog="git log --graph --pretty=format:'%Cred%h%Creset -%C(yellow)%d%Creset %s %Cgreen(%cr) %C(bold blue)<%an>%Creset' --abbrev-commit"</pre>

        <p class="mt-2 text-wrap text-left text-lg text-white/85">
            You can find more of Freek's aliases in his <a
                href="https://github.com/freekmurze/dotfiles/blob/dd56ee829bea2c808fdc75bb8dd981fe84cca669/shell/.aliases"
                class="text-blue-500/75" target="_blank" rel="noopener">.aliases</a> file in the <a
                href="https://github.com/freekmurze/dotfiles/" class="text-blue-500/75" target="_blank"
                rel="noopener">freekmurze/dotfiles</a> repository.
        </p>

        <h3 class="mt-8 text-xl font-bold text-white">Jess Archer</h3>

        <p class="mt-2 text-wrap text-left text-lg text-white/85">
            <a href="https://twitter.com/jessarchercodes" class="text-blue-500/75">Jess Archer</a> is a developer at
            Laravel and has some great aliases that she uses in her projects. There are some interesting ones in here
            such as the <code class="rounded-md bg-gray-900 p-1 text-sm text-white">laravel-setup</code> alias.
            Here are a few of my favorites:
        </p>

        <pre class="mt-2 rounded-md bg-gray-900 p-4 text-sm text-white" style="white-space: pre-wrap;">alias artisan="php artisan"

alias tinker="artisan tinker"

alias sqlit="sed -e 's/\(DB_.*\)/# \\1/g' -e 's/# \(DB_CONNECTION=\).*/\\1sqlite/g' -i .env"

alias lenv="cp -n .env.example .env && (grep '^APP_KEY=.\+' .env > /dev/null || artisan key:generate)"

alias laravel-setup="composer install && lenv && sqlit && artisan migrate --force --seed"

alias sail='[ -f sail ] && sail || vendor/bin/sail'</pre>

        <p class="mt-2 text-wrap text-left text-lg text-white/85">
            You can find more of her aliases in her <a
                href="https://github.com/jessarcher/dotfiles/blob/714fc74c62b1c7d834e6a5fa8369b9eb3c769e30/zsh/zshrc"
                class="text-blue-500/75" target="_blank" rel="noopener">zshrc</a> file within the <a
                href="https://github.com/jessarcher/dotfiles/" class="text-blue-500/75" target="_blank"
                rel="noopener">jessarcher/dotfiles</a> repository.
        </p>

        <h3 class="mt-8 text-xl font-bold text-white">Christoph Rumpel</h3>

        <p class="mt-2 text-wrap text-left text-lg text-white/85">
            <a href="https://christoph-rumpel.com/" class="text-blue-500/75">Christoph Rumpel</a> is a developer and
            content creator who has some great aliases that he uses in his projects.
            I found the <code class="rounded-md bg-gray-900 p-1 text-sm text-white">clearlogs</code> alias to be
            particularly useful for deleting your log files.
            Here are a few of my favorites:
        </p>

        <pre class="mt-2 rounded-md bg-gray-900 p-4 text-sm text-white" style="white-space: pre-wrap;">alias art='php artisan'

alias clearlog='truncate -s 0 $PWD/storage/logs/laravel.log'

alias clearlogs='truncate -s 0 $PWD/storage/logs/*.log'

alias nope="git reset --hard && git clean -df"</pre>

        <p class="mt-2 text-wrap text-left text-lg text-white/85">
            You can find more of his aliases in his <a
                href="https://github.com/christophrumpel/dotfiles/blob/master/aliases.zsh" class="text-blue-500/75"
                target="_blank" rel="noopener">aliases.zsh</a> file within the <a
                href="https://github.com/christophrumpel/dotfiles/" class="text-blue-500/75" target="_blank"
                rel="noopener">christophrumpel/dotfiles</a> repository.
        </p>

        <h3 class="mt-8 text-xl font-bold text-white">Steve McDougall</h3>

        <p class="mt-2 text-wrap text-left text-lg text-white/85">
            <a href="https://twitter.com/JustSteveKing" class="text-blue-500/75">Steve McDougall</a> is a developer
            and content creator who has some great aliases that he uses in his projects.
            I found the sail commands useful for dealing with projects using Sail. Here are a few of my favorites:
        </p>

        <pre class="mt-2 rounded-md bg-gray-900 p-4 text-sm text-white" style="white-space: pre-wrap;">alias a="php artisan"

alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'

alias sa='sail artisan'

alias test='a test'

alias sail-test 'sail artisan test</pre>

        <p class="mt-2 text-wrap text-left text-lg text-white/85">
            You can find more of his aliases in his <a
                href="https://github.com/JustSteveKing/dotfiles-mac/blob/main/aliases.zsh" class="text-blue-500/75"
                target="_blank" rel="noopener">aliases.zsh</a> file within the <a
                href="https://github.com/JustSteveKing/dotfiles-mac" class="text-blue-500/75" target="_blank"
                rel="noopener">JustSteveKing/dotfiles-mac</a> repository.
        </p>

        <h2 class="mt-8 text-2xl font-bold text-white">Looking for more?</h2>

        <p class="mt-4 text-wrap text-left text-lg text-white/85">
            If you're looking for more aliases, you can search the <a
                href="https://github.com/search?q=alias+artisan+language%3AShell&type=code&p=1"
                class="text-blue-500/75" target="_blank" rel="noopener">GitHub search results</a> for aliases
            specific to Laravel.
            Typically, you will find these within dotfiles repositories.
        </p>

        <p class="my-4 text-wrap text-left text-lg text-white/85">
            If you have any useful aliases that you would like to share that didn't make this list, feel free to reach
            out to me on <a href="https://twitter.com/andyhnk" class="text-blue-500/75" target="_blank"
                rel="noopener">X/Twitter</a>.
        </p>

    </div>
</x-app>
