---
title: "Useful bash aliases for Laravel projects"
description: "Bash shortcuts and aliases are a great way to speed up your workflow. They allow you to create custom commands that can be used to perform common tasks quickly and easily."
published_at: "2024-07-10"
---

Bash aliases are a great way to speed up your workflow. They allow you to create custom commands that can be used to perform common tasks quickly and easily.

## Creating Aliases

Aliases are custom commands that you can create to perform common tasks. For example, you can create an alias to run your tests, migrate your database, or clear your cache.

To create an alias, open your the `~/.bash_aliases` or the `~/.bashrc` file and add the following line:

```
alias pa="php artisan"
```

Be sure to source the file after adding the alias by running the following command:

```
source ~/.bash_aliases

.. or source ~/.bashrc
```

Now you can run the `pa` command in your terminal to run any `php artisan` command. For example, you can run `pa migrate` to migrate your database.

## Useful Aliases

I thought it would be fun to share some of the aliases I use in my Laravel projects and also source some from the community.

Here are my personal aliases that I use in my projects:

```
alias pa="php artisan"

alias tp="php artisan test -p"

alias mfs="php artisan migrate:fresh --seed"

alias c="composer"

alias cu="c update"

alias ci="c install"

alias gpo="git pull origin"

alias nah="git reset --hard;git clean -df"

alias t="phpunit"

alias tf="phpunit --filter"
```

### Aliases from the Community

### Dries Vints

[Dries Vints](https://twitter.com/driesvints) is a Software Engineer at Laravel and has some great aliases that he uses in his projects. I found the `cfresh` alias to be particularly interesting for nuking your vendor directory and `composer.lock` file. Here are a few of my favorites:

```
alias a="herd php artisan"

alias tinker="herd php artisan tinker"

alias seed="herd php artisan db:seed"

alias serve="herd php artisan serve"

alias cfresh="rm -rf vendor/ composer.lock && composer i"

alias wip="commit wip"

alias commit="git add . && git commit -m"
```

You can find more of Dries' aliases in his [aliases.zsh](https://github.com/driesvints/dotfiles/blob/259a39721e07393479938ec330a599cfd2f5a2d3/aliases.zsh) file from the [driesvints/dotfiles](https://github.com/driesvints/dotfiles) repository.

### Freek Van der Herten

[Freek Van der Herten](https://freek.dev/) is a developer at [Spatie](https://spatie.be/), which is a company that has created hundreds of Laravel packages. You will likely have used one of their packages in your projects. Here are a few interesting aliases:

```
alias a="php artisan"

alias cda="composer dump-autoload -o"

alias larastan="vendor/bin/phpstan analyse"

alias deploy='envoy run deploy'

alias pp="php artisan test --parallel"

alias sail='./vendor/bin/sail'

alias glog="git log --graph --pretty=format:'%Cred%h%Creset -%C(yellow)%d%Creset %s %Cgreen(%cr) %C(bold blue)<%an>%Creset' --abbrev-commit"
```

You can find more of Freek's aliases in his [.aliases](https://github.com/freekmurze/dotfiles/blob/dd56ee829bea2c808fdc75bb8dd981fe84cca669/shell/.aliases) file in the [freekmurze/dotfiles](https://github.com/freekmurze/dotfiles/) repository.

### Jess Archer

[Jess Archer](https://twitter.com/jessarchercodes) is a developer at Laravel and has some great aliases that she uses in her projects. There are some interesting ones in here such as the `laravel-setup` alias. Here are a few of my favorites:

```
alias artisan="php artisan"

alias tinker="artisan tinker"

alias sqlit="sed -e 's/\(DB_.*\)/# \\1/g' -e 's/# \(DB_CONNECTION=\).*/\\1sqlite/g' -i .env"

alias lenv="cp -n .env.example .env && (grep '^APP_KEY=.\+' .env > /dev/null || artisan key:generate)"

alias laravel-setup="composer install && lenv && sqlit && artisan migrate --force --seed"

alias sail='[ -f sail ] && sail || vendor/bin/sail'
```

You can find more of her aliases in her [zshrc](https://github.com/jessarcher/dotfiles/blob/714fc74c62b1c7d834e6a5fa8369b9eb3c769e30/zsh/zshrc) file within the [jessarcher/dotfiles](https://github.com/jessarcher/dotfiles/) repository.

### Christoph Rumpel

[Christoph Rumpel](https://christoph-rumpel.com/) is a developer and content creator who has some great aliases that he uses in his projects. I found the `clearlogs` alias to be particularly useful for deleting your log files. Here are a few of my favorites:

```
alias art='php artisan'

alias clearlog='truncate -s 0 $PWD/storage/logs/laravel.log'

alias clearlogs='truncate -s 0 $PWD/storage/logs/*.log'

alias nope="git reset --hard && git clean -df"
```

You can find more of his aliases in his [aliases.zsh](https://github.com/christophrumpel/dotfiles/blob/master/aliases.zsh) file within the [christophrumpel/dotfiles](https://github.com/christophrumpel/dotfiles/) repository.

### Steve McDougall

[Steve McDougall](https://twitter.com/JustSteveKing) is a developer and content creator who has some great aliases that he uses in his projects. I found the sail commands useful for dealing with projects using Sail. Here are a few of my favorites:

```
alias a="php artisan"

alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'

alias sa='sail artisan'

alias test='a test'

alias sail-test 'sail artisan test
```

You can find more of his aliases in his [aliases.zsh](https://github.com/JustSteveKing/dotfiles-mac/blob/main/aliases.zsh) file within the [JustSteveKing/dotfiles-mac](https://github.com/JustSteveKing/dotfiles-mac) repository.

## Looking for more?

If you're looking for more aliases, you can search the [GitHub search results](https://github.com/search?q=alias+artisan+language%3AShell&type=code&p=1) for aliases specific to Laravel. Typically, you will find these within dotfiles repositories.

If you have any useful aliases that you would like to share that didn't make this list, feel free to reach out to me on [X/Twitter](https://twitter.com/andyhnk).
