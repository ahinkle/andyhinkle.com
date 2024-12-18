<x-app>
    <x-slot name="seo">
        <title>Do you write down methods in your migrations?</title>
        <meta name="description"
            content="In this episode of The Midwest Artisan, we discuss the debate to write down methods in your migrations, Queue Serialization, Stubs, Laravel PR Ideas, Migrations vs. Seeders, and more.">
        <meta property="og:title" content="Do you write down methods in your migrations?">
        <meta property="og:description"
            content="In this episode of The Midwest Artisan, we discuss the debate to write down methods in your migrations, Queue Serialization, Stubs, Laravel PR Ideas, Migrations vs. Seeders, and more.">

        <script type="application/ld+json">
            {
            "@context": "https://schema.org/",
            "@type": "PodcastEpisode",
            "url": "https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders",
            "name": "Do you write down methods in your migrations?",
            "datePublished": "2024-12-16",
            "timeRequired": "PT1H9M35S",
            episodeNumber: "11",
            "description": "In this episode of the Midwest Artisan, we discuss the debate to write down methods in your migrations, Queue Serialization, Stubs, Laravel PR Ideas, Migrations vs. Seeders, and more.",
            "associatedMedia": {
                "@type": "MediaObject",
                "embedUrl": "https://www.youtube.com/watch?v=C-yQIyRd3bs"
            },
            "publisher": {
                "@type": "Organization",
                "name": "The Midwest Artisan",
                "url": "https://the-midwest-artisan.transistor.fm"
            }
        </script>
    </x-slot>

    <p class="py-2 text-center font-sans text-sm text-white/75">December 16, 2024</p>
    <h1 class="text-center font-sans text-3xl font-bold text-white md:text-5xl">NDo you write down methods in your
        migrations?</h1>

    <div class="mx-auto mt-8 max-w-3xl">
        <div class="px-4 pb-10">
            <iframe width="100%" height="180" frameborder="no" scrolling="no" seamless=""
                src="https://share.transistor.fm/e/19d3cdf1?color=1F2937&background=101827"></iframe>
        </div>

        <div class="prose prose-lg px-4 dark:prose-invert">
            <div>Happy Holidays! This week, we discuss tackling some queue serialization issues, debating migrations
                versus seeders, and discussing some new ideas for Laravel Core PRs. We also discuss PHP 8.4’s latest
                features, why down methods might be risky, and how custom stubs could make development smoother.
            </div>
        </div>

        <div class="mt-8 px-4">
            <iframe class="h-96 w-full" src="https://www.youtube.com/embed/XjS7WNih0_U?si=NXchsI80UDk5CcsS"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <h2 class="mt-12 text-center text-2xl font-bold text-white">Transcript</h2>

        <div class="prose prose-sm px-4 dark:prose-invert">
            <section class="episode-description episode-transcript" x-show="transcript">
                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=0m2s"
                        data-turbo="false" title="Jump to 00:02 in this episode">00:02</a>)
                    <br>Hey everyone, welcome to another episode of The Midwest Artisan. I'm your host, Ane Hinkle.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=0m7s"
                        data-turbo="false" title="Jump to 00:07 in this episode">00:07</a>)
                    <br>And I'm your cohost Dalton McCleary.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=0m11s"
                        data-turbo="false" title="Jump to 00:11 in this episode">00:11</a>)
                    <br>How you doing, Dalton?
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=0m12s"
                        data-turbo="false" title="Jump to 00:12 in this episode">00:12</a>)
                    <br>Doing good yourself, surviving.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=0m13s"
                        data-turbo="false" title="Jump to 00:13 in this episode">00:13</a>)
                    <br>Good man, doing good. Yeah, I've been through the ringer with a queue serialization. You've pair
                    with me a little bit on this. And so you kind of know some of the gist. Like, did you know this is a
                    thing? So I'll set the scene. I've been investigating. Yeah, I've been investigating an issue with
                    queue serialization. I have a job.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=0m27s"
                        data-turbo="false" title="Jump to 00:27 in this episode">00:27</a>)
                    <br>Mm-hmm. Mm-hmm.
                </p>

                <p>Yes, give me the context.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=0m41s"
                        data-turbo="false" title="Jump to 00:41 in this episode">00:41</a>)
                    <br>it goes back and pulls a nightly report. So it goes back to the previous day, pulls the report
                    storage, etc. So, I have it in the console of the scheduler. do like schedule, quote unquote job,
                    and then the job class and put it daily. Right. So I want this to run every day, pull yesterday's
                    report, save it, do the whole thing. So in my job class.
                </p>

                <p>I have a constructor, so it's like public function construct. This is an extra job function class.
                    Then inside public function construct inside the, inside the parameters, like open construct inside
                    there inside the parentheses, I have public question mark carbon, like illuminate support carbon.
                    like so to set it as an all, so either a carbon object or an all variable date equals an all. And I
                    apologize just talking code on a, on an audio podcast or isn't</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1m33s"
                        data-turbo="false" title="Jump to 01:33 in this episode">01:33</a>)
                    <br>audio podcast.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1m34s"
                        data-turbo="false" title="Jump to 01:34 in this episode">01:34</a>)
                    <br>But just imagine you have a constructor inside your constructor, have public carbon variable
                    date equals null. Date or carbon has a question mark in front of it, just saying, you know, it can
                    be null or carbon object. So, we put tests behind this, like one of the tests even is like if it's
                    null to ensure that the date is getting set to yesterday. So when you do pass null,
                </p>

                <p>it will inside the constructor do something like this date. if the data set use that, if it's not
                    set, go today, sub day. that way it's getting yesterday's report, not today's report. So what I was
                    finding is that, it would create a new carbon instance of today, no matter what, like if it's no,
                    unless it's, unless you pass a carbon object to it, but if it's no.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=2m12s"
                        data-turbo="false" title="Jump to 02:12 in this episode">02:12</a>)
                    <br>Mm-hmm. Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=2m28s"
                        data-turbo="false" title="Jump to 02:28 in this episode">02:28</a>)
                    <br>It will automatically just create a carbon instance, even though you still are really set it as
                    no, just so strange. and the reason that we have a variable like of Null instead of just setting it
                    properly is that we have in other places where you can go like, and fulfill like dates in the past.
                    So you can do.
                </p>

                <p>like date ranges in the past and it just kind of loops through a start date and end date creates a,
                    know, carbon object for each individual date into this job. You can pass it the date, et cetera. But
                    in this case, I'm like, Hey, if I don't pass it anything, if it's just null, give it yesterday. And
                    so that way it's clear separations of concerns are good. However, so when you schedule it in your
                    console, this is where it just gets really tricky. So date, when you do a date,</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=3m12s"
                        data-turbo="false" title="Jump to 03:12 in this episode">03:12</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=3m16s"
                        data-turbo="false" title="Jump to 03:16 in this episode">03:16</a>)
                    <br>It's a new carbon instance of today, not yesterday. So it's so strange. I have never run into
                    this. And so if, but the biggest frustration is if I fired this job manually, like through the
                    driver of like sync or like a non-console thing, like a non-schedule works fine. Like you get
                    today's update like you get yesterday.
                </p>

                <p>But so did a lot of digging. It's like something in the job serialization process. So like when when
                    the schedule is running or setting up, it's something like the deconstruction of the serialization
                    or something where it takes that null and creates just a new carbon object of today. It's so weird.
                    So I moved it to the handle to the handle method, like inside the handle method it can do. But
                    that's so weird, too, because inside the handle method.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=4m6s"
                        data-turbo="false" title="Jump to 04:06 in this episode">04:06</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=4m10s"
                        data-turbo="false" title="Jump to 04:10 in this episode">04:10</a>)
                    <br>Like it's so hard to, to handle because it's always a carbon object. Even if you deliberately
                    set it as null, it's the strangest thing.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=4m17s"
                        data-turbo="false" title="Jump to 04:17 in this episode">04:17</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=4m19s"
                        data-turbo="false" title="Jump to 04:19 in this episode">04:19</a>)
                    <br>So yeah, I put it in handle method and what I did inside the handle method, I use a method
                    inside there to just, Hey, call this up and return the right carbon instance. Just very strange and
                    kind of a quirk and like the queue serialization, but little along with that when did there have,
                    have you, I mean, we kind of during halfway through this is like, I need a pair of somebody cause
                    I'm going to lose my mind. So I talked to you about it you're like, you had a lot of great like
                    debugging things. You just say like, Hey,
                </p>

                <p>because we figured out we couldn't, we couldn't replicate it at all locally. We tried and tried. so
                    with, one point we thought it was a vapor issue that then, once I figured it out, I tried it over
                    and forge and it's an issue. Like it happens over there too. And then I was able to finally
                    replicate it locally by just running the whole like schedule, you know, on your, like schedule
                    command on your CLI. Finally got to replicate locally. yeah. It's a, it's just weird that like.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=4m57s"
                        data-turbo="false" title="Jump to 04:57 in this episode">04:57</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=5m20s"
                        data-turbo="false" title="Jump to 05:20 in this episode">05:20</a>)
                    <br>So TLDR and all of that, a little long winded. If you have a new job class and you have a
                    construct in there, if it's like you put public carbon date equals null, will set the carbon, it'll
                    create a new carbon object, which I'm curious if it does that for users and models and all of that,
                    I think. That's kind of like how that works with serialization, but I don't know. Have you seen
                    this? Have you seen anything like this? Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=5m20s"
                        data-turbo="false" title="Jump to 05:20 in this episode">05:20</a>)
                    <br>Yeah.
                </p>

                <p>No. And I was going to, I was going to pull my hair out when we were, when we pair programming on it.
                    Cause I couldn't figure it out either. I was like, it's probably just something really dumb.
                    Something's something easy. no, it's actually, it's actually quite hard. no, this is actually
                    really, really hard. Why, why is it doing this? And yeah, we, tested all kinds of thought was like,
                    I think at the end of that call, we were like, it's probably just a vapor thing. The way that vapor
                    has, you know, the queue set on a different version of the application and sort of that, but.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=6m7s"
                        data-turbo="false" title="Jump to 06:07 in this episode">06:07</a>)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=6m15s"
                        data-turbo="false" title="Jump to 06:15 in this episode">06:15</a>)
                    <br>I mean, did, how, much did you, did you test on it? Cause I was going to ask you if you tested
                    it on forge. Cause the last that we talked about it, that's, that was what I knew. I didn't know if
                    you'd fixed it yet. I was going to ask if it worked on forge. I was going to ask if it worked with,
                    with date time instead of carbon as well. I wonder if it's just like a carbon thing or if it's an
                    actual date time issue. Cause it's definitely something with, with that type hint is like, you can't
                    have a null version of this specific type.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=6m30s"
                        data-turbo="false" title="Jump to 06:30 in this episode">06:30</a>)
                    <br>Mmm. Mmm. I to try that. Mm-hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=6m43s"
                        data-turbo="false" title="Jump to 06:43 in this episode">06:43</a>)
                    <br>like a carbon, it just doesn't happen. See, that's super, super odd and super very specific. I I
                    guess not specific enough because I've put jobs that have dates as their constructors. I've put
                    classes that have dates as their constructors. And it seems so odd to me that it would always
                    default to today. So yeah, I'm curious on how you did fix it. Because if it does default to today,
                    how do you know that it was passed null?
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=6m46s"
                        data-turbo="false" title="Jump to 06:46 in this episode">06:46</a>)
                    <br>Yeah.
                </p>

                <p>Yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=7m13s"
                        data-turbo="false" title="Jump to 07:13 in this episode">07:13</a>)
                    <br>in order to figure out that it was yesterday. You know what mean? Like how did you actually fix
                    it? You said you put it in the handle method and you have some other stuff. I wanna dive just one
                    level deeper.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=7m17s"
                        data-turbo="false" title="Jump to 07:17 in this episode">07:17</a>)
                    <br>Yeah.
                </p>

                <p>Sure. Yeah. So you brought up vapor and yeah, cause we've been, we've been bit by vapor before
                    without going to a side tangent, but like, for example, you can't set jobs past like a retry after
                    15 minutes. So if you have a flaky API, you have to set it to retry within those 15 minutes. Like
                    you can't try three hours later. You just have to continuously retry, which is annoying, but just
                    AWS, it's not a vapor thing directly. It's AWS. It's upstream. But yeah, so we thought we kind of
                    like, we're starting to wonder because of</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=7m45s"
                        data-turbo="false" title="Jump to 07:45 in this episode">07:45</a>)
                    <br>which is dumb.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=7m53s"
                        data-turbo="false" title="Jump to 07:53 in this episode">07:53</a>)
                    <br>we've dealt with Q issues in the past in vapor. Maybe it's some like interesting AWS vapor
                    thing. But yeah, I ended up, it's really hacky and I don't like it. I'm probably gonna go figure out
                    how to refactor it. what it is, is I check if the time is midnight on the date requirement. And if
                    it is, I do today, I'm sorry, if it's not midnight.
                </p>

                <p>I do today, sub day, basically because I know at that point it's, it's giving a new carbon object,
                    but it's kind of like, I hate this logic because I have to know as a developer, anytime I pass to
                    it, I have to make sure it's midnight. So I wrote a stupid comment in there, but I'm going to
                    refactor it cause I don't like it. It obviously smells funny. So because anywhere else you're
                    passing the dates into there, it's always going to be midnight. And since it's going to create a new
                    carbon object, will very likely not be midnight to the millisecond.</p>

                <p>And so because of that, I know that that it's, it's doing some weird stuff in the constructor. It's
                    setting that carbon object for some reason. And I just have to reset that and just do today's
                    update. So that's kind of my current implementation. I hate it. It smells because I, have to know,
                    like if you pass the random today, carbon object, sub day, it's not going to work. It's going to
                    like, it's going to take that and change it. So, man, it smells terrible, but it works for now.</p>

                <p>I was able to deploy on a Friday with that change. Hated it, but hey.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=9m22s"
                        data-turbo="false" title="Jump to 09:22 in this episode">09:22</a>)
                    <br>Friday scares me also it's just while you were talking I had the weird thought of if someone
                    who's not a developer or Good with Laravel if you've made it this far in this podcast and you're
                    like, wow Why are they talking that their code smells? Just just know that That just means hacky,
                    right? It just it smells funky, but it's very clever. That's very clever that you basically trying
                    to see if it's a
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=9m44s"
                        data-turbo="false" title="Jump to 09:44 in this episode">09:44</a>)
                    <br>Yeah, good smell.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=9m51s"
                        data-turbo="false" title="Jump to 09:51 in this episode">09:51</a>)
                    <br>system generated date versus like if you're passing it a date. It's very clever.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=9m55s"
                        data-turbo="false" title="Jump to 09:55 in this episode">09:55</a>)
                    <br>Mm-hmm, so I'm doing now, yeah. Yeah, because if you just do new carbon, if you just write date
                    equals new carbon, it's gonna give you now. And so I just work around it. I hate it, but I'll figure
                    it out. yeah, it's super weird.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=10m9s"
                        data-turbo="false" title="Jump to 10:09 in this episode">10:09</a>)
                    <br>It's clever.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=10m13s"
                        data-turbo="false" title="Jump to 10:13 in this episode">10:13</a>)
                    <br>Yeah, so the problem is we can't test it. You can't test the functionality with it because, it
                    would be testing Laravel code at that point. You have to test the scheduler, ensure that the
                    schedule of serialization works, which is just weird with Laravel. And you don't want to get that
                    far when you're actually testing the framework to ensure the framework is doing what it should be
                    doing just now. So it's something with the serialization. I didn't see it in the documentation
                    anywhere. Like I tried, there's some mentions of serialization, but
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=10m22s"
                        data-turbo="false" title="Jump to 10:22 in this episode">10:22</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=10m39s"
                        data-turbo="false" title="Jump to 10:39 in this episode">10:39</a>)
                    <br>So what I'm to a point now is I'm trying to figure out how it happened or or like why that's
                    occurring and then maybe even make a note of it in the docs if it's like this is really a thing or
                    if I'm dumb and I just don't know. I've always known for many years past like you don't want you
                    don't want to mess with the constructor too much in jobs and in the scheduler like if you put in the
                    scheduler for example I could have done something like schedule colon colon job and then pass it the
                    class and then comma then gave it like now.
                </p>

                <p>Sub day or or today's update in the actual console scheduler but when if that is cached or if you
                    know that goes through there Where it takes a snapshot of your schedule? It's gonna be that current
                    deployment time. It's not gonna so that that day's gonna be frozen. It's not gonna be the actual sub
                    day if that makes sense, so I know I know that's been an issue like just to be careful on your
                    parameters and stuff so yeah, it's kind of wild but</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=11m10s"
                        data-turbo="false" title="Jump to 11:10 in this episode">11:10</a>)
                    <br>Mm-hmm.
                </p>

                <p>What a nightmare. I think we were even talking about this, was it like three days ago? So this has
                    been like a three day buck. And I don't wanna say anything, but I don't know if I see any gray
                    hairs, but if that was me, there would be a lot of gray hairs after figuring all that out.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=11m42s"
                        data-turbo="false" title="Jump to 11:42 in this episode">11:42</a>)
                    <br>Yeah
                </p>

                <p>Mm-hmm.</p>

                <p>Yeah.</p>

                <p>Yeah.</p>

                <p>It, it's frustrating because it just, it's one of those things that at the time it could only get it
                    to happen in production. Then you have to do the stupid thing like testing this, testing this,
                    testing this on all your staging environments, just to see if you can actually get it to finally
                    replicate. and finally we got there, but it just, anytime you have to like ship debug statements
                    into production, like log, clone, clone, debug. It's just like, come on, man. And so, and then it's
                    like, you're trying to.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=12m22s"
                        data-turbo="false" title="Jump to 12:22 in this episode">12:22</a>)
                    <br>Oof.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=12m25s"
                        data-turbo="false" title="Jump to 12:25 in this episode">12:25</a>)
                    <br>You're trying to not make a release because we have staging in production, trying to make a
                    release for such a dumb thing. Luckily, we're able to replicate it on the staging environment for
                    the production so we don't have to make a release. yeah, man, it's been a headache just trying to
                    figure out the serialization. You know how many times I looked at the constructor? I went letter for
                    letter, like looking like, I missing anything here? And just pulled everything out. then I finally
                    hit, when I just started.
                </p>

                <p>minimizing the whole thing, finally triggered like, okay, it's a serialization that's at issue. I
                    asked to ask cloud, ask chat GPT, nothing got terrible results. It was telling me maybe your app
                    time zone is all like wrong. I'm like, nope, it's UTC. Maybe you try to force the time zone. Okay, I
                    don't know why you would want to be any different, but try that, nope.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=13m1s"
                        data-turbo="false" title="Jump to 13:01 in this episode">13:01</a>)
                    <br>Such an odd thing,
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=13m20s"
                        data-turbo="false" title="Jump to 13:20 in this episode">13:20</a>)
                    <br>So do you like carbon arrow or like date arrow, use time zone? Yeah, it was a whirlwind, but
                    finally got there.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=13m23s"
                        data-turbo="false" title="Jump to 13:23 in this episode">13:23</a>)
                    <br>Alright, yeah, yeah, yeah.
                </p>

                <p>What chaos, man. And it's probably just because of like the PHP type hinting, right? That's probably
                    what just jacked you up. Damn PHP.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=13m36s"
                        data-turbo="false" title="Jump to 13:36 in this episode">13:36</a>)
                    <br>Yeah, I wonder. Yeah, because we talked about well, you know, now you mentioned it like we
                    talked on the show may have been last episode of the one before we talked about how you can you can
                    create a new carbon object from the from the constructor. So which is nice, but now we're we're like
                    fighting the evil side of that. Like, is this the is this what it's doing? So. Yeah, it's coming
                    full circle. Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=13m53s"
                        data-turbo="false" title="Jump to 13:53 in this episode">13:53</a>)
                    <br>Yes,
                </p>

                <p>Yeah, hey, that's a good callback. Hm, why didn't think about that? Well, now you know the cons. The
                    cons is a three-day headache. The pros is it looks really nice. Damn PHP.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=14m13s"
                        data-turbo="false" title="Jump to 14:13 in this episode">14:13</a>)
                    <br>Yeah. Yeah. Three days and two walks, two walks of like maybe, maybe I can move outside the
                    constructor. Would that be the problem? Nope. Tried that. Like moving outside the parentheses of the
                    constructor, like the public promotion, like moving out of the public promotion. Not a thing. So,
                    yep.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=14m35s"
                        data-turbo="false" title="Jump to 14:35 in this episode">14:35</a>)
                    <br>Wow. What a crazy week you've had.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=14m37s"
                        data-turbo="false" title="Jump to 14:37 in this episode">14:37</a>)
                    <br>Yeah, so it's been good. Yeah, it's been fun though. It's stuff like that will keep you up at
                    night, but it's always fun once you find a solution and thank goodness it's I found it before the
                    end of day to be in Friday. So that's good.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=14m50s"
                        data-turbo="false" title="Jump to 14:50 in this episode">14:50</a>)
                    <br>That's true. Yeah. It's like beating a Dark Souls boss. Have you ever beat Dark Souls? A Dark
                    Souls boss? Like the wave of relief when you finally figure something out. Like you can just
                    breathe.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=14m55s"
                        data-turbo="false" title="Jump to 14:55 in this episode">14:55</a>)
                    <br>I have not played.
                </p>

                <p>I've heard that game is really good because it like, the first when you start out, it'll like, you'll
                    find a boss but you can't defeat it, but it's kind of like, it sets the tone for the game, like you
                    need to, like usually games kind of level up and then you might get to a boss, but it's like level
                    one, here's the boss, or you might have to come back and get this guy later. it kind of sets the
                    tone of like, you have to get better then come back to it. I kind of like that. I've never played
                    it, but my brother tells me all about it.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=15m24s"
                        data-turbo="false" title="Jump to 15:24 in this episode">15:24</a>)
                    <br>Yeah, you sh- you you should. You should. Get Elden Ring. Elden Ring's good. Yeah, anyway.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=15m29s"
                        data-turbo="false" title="Jump to 15:29 in this episode">15:29</a>)
                    <br>Yeah, I'm too nerdy for video games. I need to go a level deeper and do programming.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=15m35s"
                        data-turbo="false" title="Jump to 15:35 in this episode">15:35</a>)
                    <br>Come on.
                </p>

                <p>Program, you know your own video game. Hey, that's a great That's a great like problem like I used to
                    do that. In college, we were actually building a video game as a final project And the video game
                    was to teach you how to program the video game that you're playing And so that's actually a great
                    like final boss the this specific bug that you just had would be the perfect final boss for that
                    video for that like programming video game</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=16m1s"
                        data-turbo="false" title="Jump to 16:01 in this episode">16:01</a>)
                    <br>final boss. Yeah. Yeah, that'd be a good one. Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=16m7s"
                        data-turbo="false" title="Jump to 16:07 in this episode">16:07</a>)
                    <br>So, so yeah, like PHP, I think PHP screwed you on that, but there are some nice things about
                    PHP. I don't know if you saw, well, I know you saw, you've seen PHP 8.4, right? Came out. Have you,
                    have you upgraded yet? Any, anything that you like about it?
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=16m19s"
                        data-turbo="false" title="Jump to 16:19 in this episode">16:19</a>)
                    <br>Mm-hmm.
                </p>

                <p>No, yeah. I haven't upgraded yet. I usually wait a little bit, usually about, I don't know, a month
                    or so just to kind of work out the, I know it has like a beta, but I feel like it really gets
                    solidified after a good month or two of rollout. But I've been kind of watching the, you know, just
                    been curious of what's different on it. And I know they have like the property hooks, I think it is,
                    right?</p>

                <p>And there's some other things that I haven't seen any benchmarks And years before, I'd be like, hey
                    guys, we have JIT now. Take a look at the difference. And it's like, well, it was pretty incredible.
                    And so, cause I brought up this in our developer meeting here in our agency, both work at. there was
                    like, they're like, what's changed? And I go, not a lot. We got, you know, some array helpers. We
                    got property hooks. got.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=17m8s"
                        data-turbo="false" title="Jump to 17:08 in this episode">17:08</a>)
                    <br>Cosmo.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=17m10s"
                        data-turbo="false" title="Jump to 17:10 in this episode">17:10</a>)
                    <br>like versus the getters and setters. So, but I haven't seen any actual, like usually before it's
                    like, Hey, got guys, we got, look at the performance increase. And usually that's kind of been our
                    selling point for clients too. It's like, Hey client, like we're going to upgrade your PHP. We're
                    going to see some performance increases. Now it's just more like, Hey, this is just to say up with
                    compliance. And we're, we're staying with end of life, end of life, you know, stuff, et cetera. So
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=17m24s"
                        data-turbo="false" title="Jump to 17:24 in this episode">17:24</a>)
                    <br>Hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=17m37s"
                        data-turbo="false" title="Jump to 17:37 in this episode">17:37</a>)
                    <br>But yeah, I'm curious if we can get rid of our getters and setters now. Like we don't have too
                    many of those with Laravel, but like, you know, with property hooks, because for a while now in PHP,
                    like setting a public property is faster than going through a getter and setter to access like a
                    private property.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=17m46s"
                        data-turbo="false" title="Jump to 17:46 in this episode">17:46</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=18m0s"
                        data-turbo="false" title="Jump to 18:00 in this episode">18:00</a>)
                    <br>So like, I think there was something like if you set a public property instead of going through
                    a getter setter, it's like 60 % slower or something like that. But now they have these new property
                    hooks and I saw something like, like it brings that number up to only a 9 % decrease. And so now
                    it's like, it doesn't really matter if you use a property hook versus getter setter. It's all just,
                    I guess, just what you would prefer. Yeah. So it kind of.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=18m19s"
                        data-turbo="false" title="Jump to 18:19 in this episode">18:19</a>)
                    <br>All right.
                </p>

                <p>friends.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=18m30s"
                        data-turbo="false" title="Jump to 18:30 in this episode">18:30</a>)
                    <br>lines up with that, which I just wish there was. know I like the flexibility, but I just wish
                    there was like, just like, everyone, this is the way in Laravel. There's a lot of that. Like, you
                    know, especially with. Yeah. There, you know, there's linters and stuff like that or a PHP stand
                    that will like flag it. But, but yeah, I just wish there was more like, Hey everybody, we, is what
                    we recommend, but it's kind of cool that you can come choose either or, and they're kind of bringing
                    that 60 % slower up to only 9%.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=18m42s"
                        data-turbo="false" title="Jump to 18:42 in this episode">18:42</a>)
                    <br>Very opinionated.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=19m1s"
                        data-turbo="false" title="Jump to 19:01 in this episode">19:01</a>)
                    <br>But yeah, I'm not, there's just not, I think in every PHP, yeah, every PHP release in recent
                    years, I'm like, Ooh, that's gonna be really nice about this one. I'm like, okay, you know,
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=19m4s"
                        data-turbo="false" title="Jump to 19:04 in this episode">19:04</a>)
                    <br>small.
                </p>

                <p>Mm-hmm.</p>

                <p>Yeah, there's like one, there's probably like two things in it totally that are like, that I thought
                    was like, that's really nice. And it's that one where you don't have to wrap your class in
                    parentheses to call a method anymore. If you just want to do that, that's fine. Love that. That's
                    great. A lot of those like array, there's like an array find or something with a key where you can
                    find a key in an array really quick with a callback. Like that's great. I love those two things.
                    Otherwise.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=19m26s"
                        data-turbo="false" title="Jump to 19:26 in this episode">19:26</a>)
                    <br>yeah. Yeah.
                </p>

                <p>Mm. Yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=19m42s"
                        data-turbo="false" title="Jump to 19:42 in this episode">19:42</a>)
                    <br>I haven't looked at anything else to upgrade since, but just those two things. I'm like, all
                    right, that's nice, but nothing's blowing my socks off and it's quite hard to do that. And I've
                    already had my socks blown off like four times this year with the Laravel announcements and cloud
                    and nightwatch and all that other stuff. So this is probably really impressive to like your average
                    PHP developer, but to us, after all these things, this is all right. This is nice.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=19m54s"
                        data-turbo="false" title="Jump to 19:54 in this episode">19:54</a>)
                    <br>Yeah.
                </p>

                <p>Yeah. Yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=20m10s"
                        data-turbo="false" title="Jump to 20:10 in this episode">20:10</a>)
                    <br>It's not crazy, it's not bad, it's not it's nice.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=20m11s"
                        data-turbo="false" title="Jump to 20:11 in this episode">20:11</a>)
                    <br>Yeah.
                </p>

                <p>Yeah, yeah with yeah, I'm kind of curious with PHP and JIT I'm curious like with If they're continue
                    with that. I didn't really see much updates They did something with OP cache like you could set some
                    memory limit thing or something where it's a bit faster with OP cache But just maybe it's just
                    coming more mature now But just in recent releases there hasn't been any</p>

                <p>Like with this PHP A4, hasn't been anything game changing or like granular changing with the JIT
                    compiler. So I'm wondering if they're starting to see the limitations there and maybe have to pivot
                    or something. yeah, I'm kind of curious where, you know, where they'll take it with future PHP
                    versions.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=20m56s"
                        data-turbo="false" title="Jump to 20:56 in this episode">20:56</a>)
                    <br>Yeah, let's see. Let's, they only got to seven four last time. So does that mean eight four is
                    the last one we're going to go to nine or are going to do the apple thing and go, go to 10 and just
                    forget that nine exists? Yeah. Yeah. Nine just.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=21m4s"
                        data-turbo="false" title="Jump to 21:04 in this episode">21:04</a>)
                    <br>I don't know. Go or do the Laravel thing. Do the Laravel thing. Five, four, five, five, six. I
                    think we had a five, Yeah. And then six, six point seven, eight. Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=21m14s"
                        data-turbo="false" title="Jump to 21:14 in this episode">21:14</a>)
                    <br>six, seven, eight, yeah. All right, checkmate PHP maintainers. see if we get an eight, five.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=21m21s"
                        data-turbo="false" title="Jump to 21:21 in this episode">21:21</a>)
                    <br>Gosh that, that drove. Diversioning on Laravel, like I, I get, I got it from like level
                    maintainability standpoint, but there are so many people like, my gosh, Laravel is just updating so
                    much. I can't keep up. Like when it went from six to seven to eight, it was just so annoying. Yeah.
                    Yeah. It's, it's normal. It's.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=21m36s"
                        data-turbo="false" title="Jump to 21:36 in this episode">21:36</a>)
                    <br>Right every year Like guys relax Think of it. It's not it's not it's not a crazy like five three
                    of five four like that was crazy Right, and that was just that was like quote unquote minor update I
                    remember that and I was like jesus most of my stuff is broken in five in five four of larvo
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=21m46s"
                        data-turbo="false" title="Jump to 21:46 in this episode">21:46</a>)
                    <br>Yeah.
                </p>

                <p>Mm-hmm. Yeah. Yeah, my one of the sites that I just I changed code on once a year. I did Laravel 10
                    to 11 and I think I just had to change ENV variables like when they changed the cache driver to
                    cache store or whatever. That was it. And it worked like I didn't have to practically do anything.
                    So, you know, it was really nice.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=22m15s"
                        data-turbo="false" title="Jump to 22:15 in this episode">22:15</a>)
                    <br>You didn't delete all your config files. That's what I did when I was upgrading to 11. I just
                    got rid of them.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=22m18s"
                        data-turbo="false" title="Jump to 22:18 in this episode">22:18</a>)
                    <br>No, on on all of them just follow my other apps. Yep. I did that I went through What's it called
                    level shift because it just does all of that? And but yeah other than that that was the only app I
                    didn't do it on just because it's like I I changed like a date on the website when it's like a It's
                    like a local basketball tournament that I help with. I don't make anything I just you know
                    participate and just a fun little thing I do and I just changed some of the context some of the
                    rules and
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=22m27s"
                        data-turbo="false" title="Jump to 22:27 in this episode">22:27</a>)
                    <br>Okay.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=22m47s"
                        data-turbo="false" title="Jump to 22:47 in this episode">22:47</a>)
                    <br>like the registration link to sign up and that's it. It's a little like landing page, but that's
                    it. And yeah, I just went straight 10, 11. Like I could probably put it like on the next JS app, but
                    it's just like simple. I just love play too much. So it was easy to strike up. yeah, till when it's
                    very simple. So cool.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=23m0s"
                        data-turbo="false" title="Jump to 23:00 in this episode">23:00</a>)
                    <br>Yeah, blade boys.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=23m7s"
                        data-turbo="false" title="Jump to 23:07 in this episode">23:07</a>)
                    <br>So, we've been having some downtime, Christmas holidays, which gets a little bit slower. And
                    I've been thinking about, have like a journal or not really a journal. sounds very like
                    sophisticated, but I have like a little notebook that any paper cut I run into with Laravel and I
                    just jot it down. And some of it, it's funny. Some of it, I look at it like, what the heck was I
                    even talking about? You know, it just like, I'll just, I'll write like a bullet point. And so I went
                    back through
                </p>

                <p>the journal and started looking through some things. one thing I mentioned was, publishing stubs.
                    Like when you do PHP artisan stub publish, it gives you everything. I think it's like 50 stubs. so
                    it's like, because they, added a lot more because you can do artisan make, you know, now make cast,
                    et cetera, and you have to have a stub for each one of those. And so,</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=23m47s"
                        data-turbo="false" title="Jump to 23:47 in this episode">23:47</a>)
                    <br>So hot.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=23m59s"
                        data-turbo="false" title="Jump to 23:59 in this episode">23:59</a>)
                    <br>They've added several new ones probably I want to say around 30 maybe less probably around 20 to
                    be realistic but new steps, but I found it overwhelming especially like if I need if I need to a
                    stub for My migrations for example, I don't like to do a down method which I'd like to talk about
                    that I'll show but you know, I I don't like to do like down methods So I don't have to want to have
                    to remove it every time put it in a stub remove it and then if I
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=24m18s"
                        data-turbo="false" title="Jump to 24:18 in this episode">24:18</a>)
                    <br>We will get to that.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=24m28s"
                        data-turbo="false" title="Jump to 24:28 in this episode">24:28</a>)
                    <br>But if I need it, you know, you can add in later, et cetera. But the stuff is really nice. It
                    just, it keeps you focused on what you need to do. But if I do that, like every single step is
                    published. And then if Laravel goes in, add something new or changes something I've run into this
                    where I'll upgrade app and then I'll have stubs back on from like Laravel six. And so I have to go
                    figure out and like, okay, I want you to force these stuff changes. And you just have to remember to
                    do that. And I was like, I'd rather just rely on Laravel's defaults and
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=24m48s"
                        data-turbo="false" title="Jump to 24:48 in this episode">24:48</a>)
                    <br>Oof.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=24m57s"
                        data-turbo="false" title="Jump to 24:57 in this episode">24:57</a>)
                    <br>if it changes, whatever, you know, so anyway, yeah. So one thing I wrote down like stub publish,
                    like, why is that so frustrating? Like it just gives you everything. It should give you something
                    maybe like a flag of like dash dash only, like stub publish dash dash only, and you just tell it
                    what you want. And so I started looking at doing stub published dash dash only.
                </p>

                <p>And I got thinking about it and we have like when you do PHP artists and make controller, if you
                    don't pass it anything, it gives you like this really nice interface of like, Hey, what do want to
                    name this? what kind of options do you want to have? especially when you're setting up a new Laravel
                    app, it's really interactive that way. And so that's using Laravel prompts. And I was thinking like,
                    what would it be like if I just did a, like a select in there, you can select which one you want.
                    And that just expanded into, okay, well,</p>

                <p>What if I do a multi-select? Okay, so I made it to where you could do a multi-select when you do stop
                    publish. And then I went one further, I'm like, what if you could type something in there, like
                    migrations and it just filtered or typing controllers and just showed you everything. And you could
                    just select which ones you want on your keyboard, hit enter and it just publishes those steps. So
                    made a PR and so.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=26m9s"
                        data-turbo="false" title="Jump to 26:09 in this episode">26:09</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=26m10s"
                        data-turbo="false" title="Jump to 26:10 in this episode">26:10</a>)
                    <br>And what that will do is you can, you can tell it which steps you want to publish directly from
                    that selection menu. was explaining. So it's easier to target the exactly the stuff that you need.
                    Use this Laravel prompts. He has that fuzzy search. Like I was talking about, and it has an all
                    option. So if you want to go back to the way it was before, if you do stub publish, which you're an
                    animal, if you want to do this, like if you just, I just want everything, but you can just do stub
                    published dash dash all. So, I felt really good about it. I sent the PR in.
                </p>

                <p>Then I started looking at like, I totally blank. Cause usually when I think of this stuff, I kind of
                    see if somebody else has done this in the past. Cause I've run into other things of like, Ooh, this
                    would be nice. And then I go look up and PRs and somebody else has done it. And then Taylor just
                    didn't like it. Maybe even the, the implementation or if it's just something about it, you know,
                    maybe it just wasn't the right time, et cetera. And so I've totally forgot to do that. And I went
                    back and it was submitted by other people a couple other times. One was by Luke Downing, which is a.
                </p>

                <p>Laracast instructor, really cool dude. really nice guy met him at Laricon this past year. So, you
                    know, he submitted the, the only option like, stub publish dash dash only. And then Taylor came back
                    and said, Hey, what about if we did like layer of prompts or something? And that's why he closed it.
                    And I was like, Hey, I just didn't realize that. So I put a comment. was like, Hey, Hey guys. Like,
                    yeah, I didn't realize that, that's the direction they're looking to go. Anyway, I just happened to
                    stumble upon it. Just trying to.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=27m10s"
                        data-turbo="false" title="Jump to 27:10 in this episode">27:10</a>)
                    <br>Mm-hmm.
                </p>

                <p>Cha-ching.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=27m37s"
                        data-turbo="false" title="Jump to 27:37 in this episode">27:37</a>)
                    <br>Like what if we could just do more out of this and ended up coming into that. And there was a
                    couple other PRs where people were kind of doing something similar, you know, just trying to do a
                    match. But anyway, submitted in, Taylor came back and he wanted the names to sound a bit more like
                    human readable. And so after reviewing them, I realized like the names, didn't really sound natural
                    anyway. It'd be like migration.create.stub.
                </p>

                <p>be like one of the options you'd have to select through. It wasn't really friendly. And so I totally
                    got that angle. So, and I also found out like when I just did, when I use like the string helper,
                    like migration, create, it would just be a dot stuff. would just be migration, create. I'm like,
                    well, that doesn't really make sense. So I'd do something like I'd use a secondary descriptor. So
                    and if controller invocable, would be invocable controller, same thing like create migration, you
                    know, through that list.</p>

                <p>So I did that, brought lowercase API to all uppercase API. know, just all the, just little things in
                    there, just yeah, handling strings, just like you would expect doing that. But then what caught me
                    by surprise is Taylor also said, he's like, think what the most let's trim down the section to only
                    include the most commonly used steps published ups. I'm like, what are the most common ones? Well,
                    as I was like, well,</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=28m39s"
                        data-turbo="false" title="Jump to 28:39 in this episode">28:39</a>)
                    <br>the nice cities.
                </p>

                <p>Mm-hmm.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=29m1s"
                        data-turbo="false" title="Jump to 29:01 in this episode">29:01</a>)
                    <br>So as I went through all of our apps at our agency, just kind of like jotting down which ones
                    are used. And I just kind of thought of like as a community, like which ones, and I just like,
                    couldn't come up with a great answer. So I just like, what are, what are just kind of the most
                    commonly ones and end up still being quite the list. So, I better review all of them and just, just
                    kind of focus on the essentials, but there's just so many, cause you never know with your type of
                    application. feel like not having it there is kind of critical, but.
                </p>

                <p>I went through and it was, I did, I got my list here at models, controllers, migrations, Seeders,
                    factories, tests, resources, notifications, mailables and jobs. No, that's a lot, but I feel like
                    an, at least in our agency, I've been in every, like all the stubs in those situations I may have
                    interacted like cues. For example, I hate that the, I know Pint could fix this.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=29m48s"
                        data-turbo="false" title="Jump to 29:48 in this episode">29:48</a>)
                    <br>and it's still kind of a lot.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=30m0s"
                        data-turbo="false" title="Jump to 30:00 in this episode">30:00</a>)
                    <br>But I hate how like the traits are all on one, like use this, use that, use this like on when
                    you create a job. So like we have a stub just to make it like just one use and it's comma separated.
                    yeah, anyway, yeah. So I went through, just try to find, and it brought the list, the stub late,
                    like when you, the ones you can produce from 52, I think it was to around 30. So then I was like,
                    this is, I just told Taylor, like, this is my.
                </p>

                <p>best opinion, I don't know, but just some thoughts there. And there were some things in like enum
                    stubs and like, those probably aren't going to be used, you know? So yeah, but those are brought the
                    list down. and I also was asking like, maybe you should create, like, we should add like a list all
                    flag. Like you can do stub publish list all, and it gives you those enums, but it's just kind of
                    weird as a developer. Like you got to know that.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=30m47s"
                        data-turbo="false" title="Jump to 30:47 in this episode">30:47</a>)
                    <br>yeah.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=30m52s"
                        data-turbo="false" title="Jump to 30:52 in this episode">30:52</a>)
                    <br>Why isn't you know I'm stubbed in here? Why is it not in here if you go a Polish dub and it's
                    not there? So I'm kind of I don't know it kind of go I can see Taylor kind of probably going back
                    and forth on it because usually he's very prompt on his PR so like let you know and it's been like a
                    week or anything so So it's been it's been open. Yeah, I've got a few like, you know I asked some
                    feedback on Twitter asked and blue sky and people seem to really like it at least because it's been
                    it's it's not it's not
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=31m8s"
                        data-turbo="false" title="Jump to 31:08 in this episode">31:08</a>)
                    <br>I was gonna ask about the follow-up.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=31m21s"
                        data-turbo="false" title="Jump to 31:21 in this episode">31:21</a>)
                    <br>groundbreaking or anything, but it is an ICD. It's just something that's always kind of bugged
                    me. Yeah. And so, I got some good feedback. hope maybe it might be accepted or continue just kind of
                    poking at it. But yeah, we'll see. But it is kind of nice to, when you do your stub publishing it,
                    you can choose which ones you want. Shouldn't get the whole kitchen sink. So what do think of that?
                    Is that, are you a stub guy? You stub guy. sounds so weird to say you stub guy.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=31m24s"
                        data-turbo="false" title="Jump to 31:24 in this episode">31:24</a>)
                    <br>Yeah, quality of life. Yeah.
                </p>

                <p>Yeah, because I don't want to have go back in and delete a bunch of stuff.</p>

                <p>Well, Andy, let me tell you No, not I I think I told you I think the only like stub that I Routinely
                    want to update is the migrations and that's that's that's usually my only use case for it because
                    This is weird and and it's totally my preference is I hate the comments in the migration So I'll
                    always remove the comments from the up and the down method</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=31m51s"
                        data-turbo="false" title="Jump to 31:51 in this episode">31:51</a>)
                    <br>You
                </p>

                <p>Yeah. Yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=32m17s"
                        data-turbo="false" title="Jump to 32:17 in this episode">32:17</a>)
                    <br>Most times I'll remove the down method too. So it's literally just an up. It's the leanest file
                    that I can possibly get it to be. Because I want it to be so simple. So that's usually my only use
                    case that I'll do it. I'll always keep the default factories, models, controllers, whatever Laravel
                    thinks is great, I'll use that. I'm not much for the customization part.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=32m24s"
                        data-turbo="false" title="Jump to 32:24 in this episode">32:24</a>)
                    <br>Mm-hmm.
                </p>

                <p>Yeah, and to your point, I know when we work on projects together, like in a model, for example, like
                    if you have the public function cast or public property cast and up at top, there's a comment, the
                    attributes that should be cast, like, yes, yes, yes. Yeah, and so we set a stub to remove those. You
                    could probably do something through Pint or something, but then I found out through, it's not really
                    reliable through the PHP CS fixture of like.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=32m52s"
                        data-turbo="false" title="Jump to 32:52 in this episode">32:52</a>)
                    <br>Hmm.
                </p>

                <p>Yeah, get those out of there.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=33m6s"
                        data-turbo="false" title="Jump to 33:06 in this episode">33:06</a>)
                    <br>I don't want this particular one, but there's some other times I do want to comment so you can't
                    do the either or. So we just strip it in stubs and works really nice. People are going to know.
                    People are going to know that's the cast. Come on. Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=33m15s"
                        data-turbo="false" title="Jump to 33:15 in this episode">33:15</a>)
                    <br>Yeah, I, yeah, yeah, I mean, it's cast, it's public, or I guess it's protected, right? Protected
                    cast, or you use the public function, cast. You know what it is. yeah, yeah. You know what it is,
                    right? Like, I don't need a seven line comment of like, this is where you're gonna cast things into
                    different classes and et cetera, et cetera. So yeah, those are my only use cases. I guess, models
                    and migrations are my big issues. I'm curious though if...
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=33m22s"
                        data-turbo="false" title="Jump to 33:22 in this episode">33:22</a>)
                    <br>Yeah, but if you use public good, yeah, be careful.
                </p>

                <p>Mm-hmm.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=33m44s"
                        data-turbo="false" title="Jump to 33:44 in this episode">33:44</a>)
                    <br>You said you posted it on Twitter and Blue Sky. Did you ask people what their most common stubs
                    that they use? Is that what you use to determine sort of quote unquote popular ones? Like, hey, of
                    these 52 classes, how many do you guys normally publish? Did you ask stuff like that?
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=34m2s"
                        data-turbo="false" title="Jump to 34:02 in this episode">34:02</a>)
                    <br>Yeah. Yeah, I did. And I got some weird responses. Like, why are you asking? Like, that's such a
                    weird day. Like, what, you know, what, what does it matter? And I was like, yeah, I had to kind of
                    explain. but I did ask, it was on discord asked a few, just like, like Laravel community members.
                    Like when you guys do a stop publish, like, what do you do? And most of them just say, they just
                    publish everything. They just don't, I guess they just never really questioned it. And they just
                    like, well, if I, if I, just publish it, but if I ever need to like,
                </p>

                <p>change that, just go change it, you know, cause it's already published. doesn't really matter. But my
                    side of like after upgrading Laravel apps over the years, I just found that those stubs get left
                    behind and I don't know if Laravel shift fixes that. think it was good suggestion for Jason if, if
                    it doesn't, but, I think it does. I don't know, but some of the apps that we've upgraded, can like,
                    man, this is using the old factory stub, you know, stuff like that. And we just have to,</p>

                <p>Just ensure that it's updated and we get confused of why we do a create factory and it's using the
                    old stub, you know, or something or one from the five or six days.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=35m7s"
                        data-turbo="false" title="Jump to 35:07 in this episode">35:07</a>)
                    <br>Yeah, those factory classes back in the day, woof. They're so much better now, but they were
                    pretty rough back in the day. Yeah, because I mean, the last thing you're going to do when you're
                    upgrading from like 10 to 11 or using shift is I need to republish all my steps. And at that point,
                    you have to republish them all, right? Because now if you make changes to the migration thing, you
                    basically override it you have to go back and sort of undo the republish.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=35m11s"
                        data-turbo="false" title="Jump to 35:11 in this episode">35:11</a>)
                    <br>Yeah.
                </p>

                <p>Yeah.</p>

                <p>Who thinks of that? Nobody. Yeah.</p>

                <p>Mm-hmm.</p>

                <p>Yeah,</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=35m36s"
                        data-turbo="false" title="Jump to 35:36 in this episode">35:36</a>)
                    <br>Do you, it's, That's a bad paper.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=35m38s"
                        data-turbo="false" title="Jump to 35:38 in this episode">35:38</a>)
                    <br>Yeah, maybe I'm just weird and I really like just to the small things of like, want my
                    application to match like the Laravel slash Laravel repo, like the skeleton repo, like even the code
                    comments to the slide as things are any, and Laravel shift does an amazing job at that. And
                    otherwise you have to manually do it and stuff, but even like for stubs or for anything, I want it
                    to be like, I don't have to worry about like something weird. Like when I'm focused on a feature,
                    when I'm focused on like writing code, I don't want this like.
                </p>

                <p>what's going on here? This is from Laravel 5 or Laravel 6 and they to figure out how to baby it
                    along, you know, going forward. It's always nice just to when you do have, you know, everything's up
                    to date, everything's fresh. It doesn't have to be on the latest version. I don't have to be on PHP
                    8.4 today. But I'm just saying when I do finally make that upgrade, I really expect to know my code
                    to kind of reflect that. And I don't have all this legacy code hanging around.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=36m34s"
                        data-turbo="false" title="Jump to 36:34 in this episode">36:34</a>)
                    <br>Yeah, the less, the less that we have to maintain the better because it just gets insane. I
                    mean, we're, think last I looked, I think I had like 22 larval sites that I manage now. I mean,
                    everything that we have to change times it by 22, you know, on a given day, I don't want to have to
                    republish and edit 22 different sites worth of, know, stub files, whatever 22 times 52 is that's a
                    lot. That's a lot of files.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=36m52s"
                        data-turbo="false" title="Jump to 36:52 in this episode">36:52</a>)
                    <br>Mm-hmm. Yeah.
                </p>

                <p>Right.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=37m4s"
                        data-turbo="false" title="Jump to 37:04 in this episode">37:04</a>)
                    <br>I don't want to have to do that.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=37m5s"
                        data-turbo="false" title="Jump to 37:05 in this episode">37:05</a>)
                    <br>Right, right. Or if we're handing off the Laravel app to somebody else or, you know, I'm having
                    somebody else work on a feature, I don't want them have to like realize, this is a weird thing from
                    Laravel six or Laravel seven and old, old component pattern. Don't worry about it. You know, it just
                    doesn't make sense for sure.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=37m25s"
                        data-turbo="false" title="Jump to 37:25 in this episode">37:25</a>)
                    <br>Yeah, I should, I should put one of those old factory classes from five four and just one random
                    Laravel site just to see what happens. Just, and then I'm going to go on PTO and I'm, and I'm just
                    going to see if somebody loses their mind. Like what in the hell is this? Sorry, Jam. No, it's bad.
                    I remember it was like.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=37m33s"
                        data-turbo="false" title="Jump to 37:33 in this episode">37:33</a>)
                    <br>Just confuse people. What's this do?
                </p>

                <p>I don't even remember what that looks like.</p>

                <p>I'm trying to picture that.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=37m48s"
                        data-turbo="false" title="Jump to 37:48 in this episode">37:48</a>)
                    <br>It wasn't even like a class, right? It was just like a PHP file, and I think you gave it a model
                    class, and it was just like an array of just garbage, right? It was just like a... Yeah, it was
                    basically like a config file, if I remember right. It was just like it returned an array almost, and
                    it wasn't like an actual class that you could define methods and stuff in, if I remember right. It
                    was garbage.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=37m52s"
                        data-turbo="false" title="Jump to 37:52 in this episode">37:52</a>)
                    <br>Mm-hmm.
                </p>

                <p>wouldn't it like user factory colon colon, then you have to do it. Yeah.</p>

                <p>Interesting. Yeah. Yeah. I'm trying to remember that too. It's, it's crazy. It wasn't that long ago,
                    but I just, like now I'm like, how could we ever done anything any differently? thing for level
                    components. I how did we ever, how did we do it without this back in just the NVC days? Like
                    everything's a model view controller.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=38m31s"
                        data-turbo="false" title="Jump to 38:31 in this episode">38:31</a>)
                    <br>A lot of includes in those blade files. Lots of includes. Extend, I haven't used extend in
                    forever, right? Extend in sections, I remember all that stuff, ooh.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=38m33s"
                        data-turbo="false" title="Jump to 38:33 in this episode">38:33</a>)
                    <br>yeah. Man, I can't remember the last time I wrote in include.
                </p>

                <p>So another one, yeah, another one I've been, I went upon is like, I was doing a lot of modular stuff,
                    like modular, development. So, I forget who that package is by he's a community member. It's a
                    Chris, call him boss Chris, but camera is it Chris morale boss Chris is yeah, it's, it's his like,
                    it's his like Laravel community member named, Daniel Colburn calls him boss Chris cause he used to
                    work for him. So.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=38m46s"
                        data-turbo="false" title="Jump to 38:46 in this episode">38:46</a>)
                    <br>strip down memory lane right there.
                </p>

                <p>boss Chris? Is that what you said?</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=39m16s"
                        data-turbo="false" title="Jump to 39:16 in this episode">39:16</a>)
                    <br>Really smart guy met him at Liricon this year and he also has a podcast But he has this package
                    out there allows you to develop level apps in a modular way and you've helped me on few of these and
                    you've kind of questioned it and like I've tried to get you to bite in on a few of it, but without
                    and get into the whole modular debate There's another area of where I'm looking to help for this
                    too. And that's also package development but so one thing I would like to
                </p>

                <p>talking about stubs and just file generation in general. One thing I've been looking at to PRing into
                    Laravel is this idea of in your app service provider having like an enforced file map. So hear me
                    out, do like a make, PHP artisan make model and maybe you don't want it to be in your app models
                    folder. Maybe you're tailored out well and you just like it in your app folder. He was like, he
                    didn't change that for a long time. I feel like he...</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=40m4s"
                        data-turbo="false" title="Jump to 40:04 in this episode">40:04</a>)
                    <br>Mm-hmm.
                </p>

                <p>it was long time.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=40m13s"
                        data-turbo="false" title="Jump to 40:13 in this episode">40:13</a>)
                    <br>Yeah, I feel like he heard enough from the community and like, we need Taylor. need to app
                    models folder. But if you, if you prefer that way, right. you can do like, so just like, hate, I
                    feel like I've talked a lot about like, talk like code, what it looks like in on audio podcasts,
                    which is not helpful, but just pretend you're in your, your app service provider. You type in, you
                    type in generator command, colon, colon, and then you have enforce.
                </p>

                <p>File map and open parentheses. So this is very similar to the eloquent enforce morph map. If you're
                    familiar with that. Yep. So inside there you can do, you can open. So you have enforced file map,
                    open parentheses. Then you have an array for this array iteration inside the array. The key of the
                    array is the stub name. So it would be like command dot stub or model dot stub</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=40m44s"
                        data-turbo="false" title="Jump to 40:44 in this episode">40:44</a>)
                    <br>Okay, yep.
                </p>

                <p>Morph map?</p>

                <p>Okay.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=41m10s"
                        data-turbo="false" title="Jump to 41:10 in this episode">41:10</a>)
                    <br>function. So like it just like where you want it to go. So basically you're making a callback of
                    where you want the file to go. So it'd be like the key would be command dot stub arrow function.
                    Function name is like the original name. Like, this is where the name of the file is going to be
                    like you inside the function. So then you can give it a return path of a string. So can do like app
                    path slash custom slash.
                </p>

                <p>blank or named at PHP so you can move your when you do PHP artists and make model is going to put it
                    in the custom folder like the literally the name folder called custom or you can just do app path
                    and just not give it anything and then it's just will deliberately drop it in your app path. Mike
                    Taylor likes to have his models back in the day. This is really helpful for modular development and
                    also like package development like there's been a few times where</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=41m45s"
                        data-turbo="false" title="Jump to 41:45 in this episode">41:45</a>)
                    <br>Mm-hmm. Custom.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=42m6s"
                        data-turbo="false" title="Jump to 42:06 in this episode">42:06</a>)
                    <br>You can't test something that's package related in Laravel. So what you do is you make like a
                    folder in your directory and just basically copy your your package out of there and And just work
                    from an actual like a level application sitting on top, you know, does that make sense? Yep. Yep. I
                    think everyone's been there Yeah, everyone's been there because there's been sometimes you just
                    can't do it like you may you might have to see a webpage or something or whatever the case is you
                    have to yeah, you
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=42m23s"
                        data-turbo="false" title="Jump to 42:23 in this episode">42:23</a>)
                    <br>That's me. That's me. That's me.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=42m34s"
                        data-turbo="false" title="Jump to 42:34 in this episode">42:34</a>)
                    <br>need to actually physically see it. So what you do is you drop your package and maybe your app
                    directory and just reference it in your composer file or something. But anyway, composer this if you
                    have like a level app set up just for that, you can do like come in your app service provider,
                    generator command, colon colon, enforce file map, open that up, and then you can do model dot stub.
                    And then so when you create a model, you can put it inside that package. And so when you do like
                    make model, it's like a CLI basically for your package development.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=42m40s"
                        data-turbo="false" title="Jump to 42:40 in this episode">42:40</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=43m4s"
                        data-turbo="false" title="Jump to 43:04 in this episode">43:04</a>)
                    <br>makes it so much easier, but helps with like domain driven development. can, it's a function, so
                    you can do whatever you want in there. So if you do like function name, you can just do like a match
                    statement based on the name. So there's two parameters I put in there. I was thinking about is like
                    when you do function name, so that's the name of the file that's coming in. And then comma is the
                    default file space. So if you want to do like a string helper to kind of tweak that or whatever.
                </p>

                <p>Or if you want to just slightly add one more director on top of that or just change it whenever in my
                    case, like for my tests, for example, like one of my big use cases for this, my tests, I like to
                    reflect it to be exactly like the application folder. So instead of like feature HTTP controllers, I
                    want it to be like feature app, HTTP controllers, et cetera, et cetera. So that way it reflects
                    exactly parabatums. That way I know exactly like the file that's testing. So getting a little long
                    winded here, but that's kind of, I have.</p>

                <p>I've cut up a proof concept, haven't submitted a pull request yet, but one thing I ran into, I'll
                    just kind of stop there. I'm just kind of curious what your thoughts.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=44m14s"
                        data-turbo="false" title="Jump to 44:14 in this episode">44:14</a>)
                    <br>Yeah, the thing that I would use it the most for is package development, but I'm also, curious
                    on when you were talking about modular, like if I want to make a model for a specific feature and it
                    has a specific folder, how can I like dynamically tell it where to go? Like I want to make a model.
                    So I do PHP artists and make model. And I've got this, this enforce a thing in my service provider
                    and I have, I want models, know, model create stub to go to the app.
                </p>

                <p>model's directory. How can I tell that to go to, I want it to go into this feature A, and then now
                    the next time I do that, I want it to go into feature B. You know what I mean? I want to make a
                    model for this feature. Now, a week later, I'm going to make another model for a different feature.
                    How do I change the directories on the fly without altering the actual make command to have an extra
                    argument? Does that make sense?</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=44m55s"
                        data-turbo="false" title="Jump to 44:55 in this episode">44:55</a>)
                    <br>Mm Yeah.
                </p>

                <p>Yeah, that's, yeah, yeah, it does. And that's actually what the modular package does is it overrides.
                    It basically extends that class and then hooks into your app service provider and then just changes
                    how it works. So basically when you do make model, there's a flag in there called dash dash module.
                    So you can do like dash dash module administration. And then it will go in your modular and it
                    knows.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=45m34s"
                        data-turbo="false" title="Jump to 45:34 in this episode">45:34</a>)
                    <br>Uh-huh.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=45m38s"
                        data-turbo="false" title="Jump to 45:38 in this episode">45:38</a>)
                    <br>this is going to be in the administration area. And so that's how that package works. It just
                    extends that class. So it works fine today. This wouldn't be able to fix that per se, but it would
                    allow them to kind of lean on Laravel a bit more to kind of construct that of how it should be
                    placed instead of having to extend it and then override it. then same thing for package developers.
                    It can be helpful. And then if you have any business rules, business logic, or just something like
                    really specific that you want this
                </p>

                <p>You want to do make controller, but you want the controller to be in somewhere very specific. It gets
                    that point. One thing that you, I'm glad you brought that up because one thing I've been thinking
                    about is like something like that. You want to do, maybe you want to pass a modular flag or just
                    some, any type of flag that you want. Maybe, inside the method we can like, I told you, we have,
                    have, we gave it the callback on it. We give them the name of the file and the default namespace.
                    Maybe, maybe the third thing is just like.</p>

                <p>the options that was provided. Yeah, like so that way they at least have context. They can do like a
                    match or like a return based on like the options that were given. So that way they at least know.
                    Yeah, it gets really kind of complicated, just complicated in scope. And so I'm trying to figure out
                    like the best way to run to kind of set this up. I was going to mention.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=46m52s"
                        data-turbo="false" title="Jump to 46:52 in this episode">46:52</a>)
                    <br>Yeah, yeah, that's...
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=47m3s"
                        data-turbo="false" title="Jump to 47:03 in this episode">47:03</a>)
                    <br>The one of the things I ran into was namespaces. So Laravel kind of guesses that the namespace
                    based at like what's provided in the context. So if you do like make controller slash administration
                    slash user admin controller, it's going to like ensure that the file space is correct, that it's
                    including administration in your namespace and stuff like that. And it's going to put that new
                    folder in there called administration. So it works really well with that. With my change,
                </p>

                <p>it has a thing in there in the code is if it knows your callback, so you can either do a return of a
                    string and it just knows that this is the direct path of where the file needs to go. If you return
                    an array that there's another method, if you return an array, can give it inside the array, can give
                    either, you can give a path in a namespace. So you can give it the path of where you want it to go.
                </p>

                <p>And then the next key is the namespace. So if you want to have this really bizarre custom namespace,
                    all good. So, so that's one, like it's really useful for packages really is what that kind of got me
                    thinking there.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=47m58s"
                        data-turbo="false" title="Jump to 47:58 in this episode">47:58</a>)
                    <br>Hmm
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=48m3s"
                        data-turbo="false" title="Jump to 48:03 in this episode">48:03</a>)
                    <br>that was just so to enforce file generation assignments would be kind of a neat thing to have. I
                    don't know. It might be in scope and possible issues. It like, it may arise from it. if
                </p>

                <p>I know Laravel looks for controllers and stuff they know in the app directory and so if you put
                    something weird and you put it your public domain or you know just something that a junior might you
                    know run into if you're not really careful but then again you could really screw yourself up with
                    morph map if you don't know what you're doing there so I don't know.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=48m33s"
                        data-turbo="false" title="Jump to 48:33 in this episode">48:33</a>)
                    <br>Yeah, now that's interesting. I mean, that gets my wheels turning on what I would use it for,
                    specifically for package development. That would be nice. Modular development would be cool. I mean,
                    they've got a package for that already. So you would just sort of like another version of that
                    within Laravel that you can do without including that package. Yeah, there's a lot of weird things
                    that you could.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=48m42s"
                        data-turbo="false" title="Jump to 48:42 in this episode">48:42</a>)
                    <br>Mm-hmm.
                </p>

                <p>Yeah, they kind of solved that, right? Mm-hmm.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=48m59s"
                        data-turbo="false" title="Jump to 48:59 in this episode">48:59</a>)
                    <br>I mean it's dynamic enough to where I could probably give it a callback and say, based on an
                    argument one, I want it to put into this directory and I want it to follow this namespace. I don't
                    want it to be app, admin, whatever. I want it to be admin something, HTTP controllers. Or.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=49m12s"
                        data-turbo="false" title="Jump to 49:12 in this episode">49:12</a>)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=49m20s"
                        data-turbo="false" title="Jump to 49:20 in this episode">49:20</a>)
                    <br>If it's not admin and it's user, I do want it in the app directory and I wanted an app models
                    namespace. So it, opens me up for more dynamic stuff for complex Laravel applications. feel like
                    normal Laravel applications, probably a bit overkill. So yeah, I'm curious on how many big, curious
                    on how many big, big applications would, would use something like that instead of a modular approach
                    or just doing.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=49m37s"
                        data-turbo="false" title="Jump to 49:37 in this episode">49:37</a>)
                    <br>Yeah, I don't, yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=49m50s"
                        data-turbo="false" title="Jump to 49:50 in this episode">49:50</a>)
                    <br>Just doing it all by hand where they just do, make model. And then I'll just manually move it
                    into this directory and change the namespace myself. Right. So yeah, it's very specific. It's very
                    specific paper cut that I think, I think it has a use cases in complex Laravel applications. I don't
                    know how the, I don't know how the hell you would, test all of those scenarios. You know what I
                    mean? That's, that's, that's a lot.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=49m58s"
                        data-turbo="false" title="Jump to 49:58 in this episode">49:58</a>)
                    <br>Yeah, domain driven development, yeah.
                </p>

                <p>Mm-hmm, yeah.</p>

                <p>Yeah, yeah, well, yeah. I've run into some problems with Laravel itself because they have the
                    generator command, is what just about most commands they use for generating things. Sometimes they
                    overwrite that. If you do make model dash dash f, it's gonna make you a model migration factory.
                    it's actually, that command is the make model.</p>

                <p>command explicitly is like it's listening for those dash dash F and it's overriding those methods
                    that hook into this generator command, if that makes sense. So basically I have to, I basically have
                    to rework it into a trait and just call it on several different commands in the Laravel framework to
                    make this even work properly. And then that's even when it's possibly even close to being
                    considerable for PR.</p>

                <p>But I've been really curious, just from other people's opinions, mostly with big, level apps, do you
                    run into this when you want your file generated? Most of time, it's probably just like Stubbs. When
                    I ask people's opinion there, they're just like, I just publish it, I don't care, it's there. But I
                    bet you would, when you do make model or make controller, if it's not in the right place. So I'm
                    just gonna click and drag the file over and call today. It takes you two extra seconds, but.</p>

                <p>I guess for just for compliance and for things you don't really have to think about it when things
                    just work, you know, and based on your business requirements, it's just something you set up in your
                    app service provider. It makes things really handy,</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=51m50s"
                        data-turbo="false" title="Jump to 51:50 in this episode">51:50</a>)
                    <br>Yeah, on I mean onboarding if you're working with multiple developers on a team, right? Like
                    everybody's making models here and there. It's just gonna throw here. Mike forgot to move his model
                    to this directory because he just forgot.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=52m3s"
                        data-turbo="false" title="Jump to 52:03 in this episode">52:03</a>)
                    <br>Yeah. yeah. Well, another one, I don't know if this would work for live wire, but for this
                    example, but, when I was, I don't know if they fixed it, but when you were in modular and you're
                    working with live wire, if you did like make live wire and you gave it modular flag, it just didn't
                    work. Like make like a live our component dash dash modular. It didn't work because it was like, it
                    was something in the light, you know, the live wire generation is its own separate thing.
                </p>

                <p>So I don't know if it'll work for that. just something, I just want it to be kind of fluid across the
                    board and kind of help. I don't know if that's still a thing now in the modular package. I don't
                    know if you can, when you do make live wire, like if it, if it's still like dash dash modular, does
                    that work now? But I'm curious. But anyway, at least when I was working on it, it did not, but that
                    was about a year ago.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=52m56s"
                        data-turbo="false" title="Jump to 52:56 in this episode">52:56</a>)
                    <br>it's it's there's some stuff to chew on there and I think it almost makes me think that I would
                    like I would like some sort of a skeleton for package development. Like I normally just create a
                    Laravel app and I'll do exactly what you said. I'll put a folder in there and I'll put all of my
                    files in it and I'll start just dragging dropping stuff just to make sure that it works. I know if
                    there's just like a slimmer version of Laravel that I can just ignore those extra files and I don't
                    know.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=52m58s"
                        data-turbo="false" title="Jump to 52:58 in this episode">52:58</a>)
                    <br>Mm-hmm.
                </p>

                <p>Yeah. What I usually do is I do the spotty. they have a package skeleton. I use that, but I still
                    have to create like a blank Laravel app and drag it in, you know, like in. Yeah. Right. Yeah. You
                    don't have the CLI or anything. he, works for Laravel now, but, there, there was some package out
                    there where you could test very granular things. And it's like, it was like a test sandbox, but for
                    Laravel development packages, it was really good.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=53m30s"
                        data-turbo="false" title="Jump to 53:30 in this episode">53:30</a>)
                    <br>Yeah, because you don't have the artisan file.
                </p>

                <p>Yeah.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=53m48s"
                        data-turbo="false" title="Jump to 53:48 in this episode">53:48</a>)
                    <br>can't remember the name of it. He worked on Laravel Nova for a while. anyway, he's actually,
                    think, the new Dries. He kind of handles gap issues for Laravel. anyway, he manages a package that
                    helps with package development. But still, I don't think you can look at an HTTP page on your
                    browser or anything and to be able to test something, you have to deliberately create a Laravel app
                    and poke around. So like for filament extensions and stuff, that's primarily where my headspace is
                    going is.
                </p>

                <p>Anytime I created a filament extension or stuff, you can't do that in just a package. Yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=54m18s"
                        data-turbo="false" title="Jump to 54:18 in this episode">54:18</a>)
                    <br>Dude.
                </p>

                <p>For real, for real. That headache, I've had that so often in the last like six months. It's insane
                    how crazy that is to do. Because the way that I do it is in filament in a package for Laravel. So
                    now I have to have the package and I have to have the filament and then I have to have Laravel with
                    filament installed just to test to see if this damn link shows up in the dashboard that I want it to
                    be in the correct order. Like I want to order it so that</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=54m49s"
                        data-turbo="false" title="Jump to 54:49 in this episode">54:49</a>)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=54m51s"
                        data-turbo="false" title="Jump to 54:51 in this episode">54:51</a>)
                    <br>My widget's always the first widget on the dashboard. Wild. That's probably where this receding
                    hairline came from. I don't know if you can see it. Lot of years.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=54m56s"
                        data-turbo="false" title="Jump to 54:56 in this episode">54:56</a>)
                    <br>Yeah, yeah. Let's talk about, we talked about earlier, talk about down methods. So we talked
                    about you being a stub guy, you being a, are you a down method guy?
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=55m10s"
                        data-turbo="false" title="Jump to 55:10 in this episode">55:10</a>)
                    <br>I think I think we've Yeah, I think we've had this exact argument before And I say argument you
                    loosely loosely because I don't think we've actually argued with each other. But yeah, I'm I'm a
                    down I'm a down guy. I like to have it there just To be there because I think before I can't
                    remember what you use. I think you use migrate refresh seed dash dash seed I think that's what you
                    use and I was using Or maybe maybe you're doing migrate
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=55m12s"
                        data-turbo="false" title="Jump to 55:12 in this episode">55:12</a>)
                    <br>trying to remember in your PRs if I see DOM methods.
                </p>

                <p>Parking lot.</p>

                <p>Okay.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=55m40s"
                        data-turbo="false" title="Jump to 55:40 in this episode">55:40</a>)
                    <br>reset or something like that. I was using a different one and you were using one that ignored
                    the down table. just like basically just deleted your database and started over. And the command
                    that I was using was, was, was rollback, right? It reset all the migrations and then run them all in
                    order again. So I like to have the down methods specifically for that so I can go back and forth.
                    Whereas I think you before was just like, just delete everything, start from the top. So I like to
                    have down methods just in case like somebody comes in and they do migrate rollback.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=55m48s"
                        data-turbo="false" title="Jump to 55:48 in this episode">55:48</a>)
                    <br>Yep, yep.
                </p>

                <p>Yep, blow it away.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=56m10s"
                        data-turbo="false" title="Jump to 56:10 in this episode">56:10</a>)
                    <br>I'll put them in there, I'll keep them auto-generated. I'll do create posts table and it'll
                    automatically have a schema create and a schema drop. And I'll leave it as that. I'll delete the
                    comments and do my stuff and move on. I have down methods.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=56m10s"
                        data-turbo="false" title="Jump to 56:10 in this episode">56:10</a>)
                    <br>Okay, yeah.
                </p>

                <p>Yeah. Yeah. So, yeah, hear me out on this. I think down methods are dangerous. Yeah. So the reason,
                    reason, I know you're getting all heated over there. So I've, I find like a complex down method,
                    like especially in production when you need to roll back and it's has not been tested and we don't
                    know if it's been tested and obviously it can't be tested. If you're testing this and CI and stuff,
                    that's stupid. So</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=56m29s"
                        data-turbo="false" title="Jump to 56:29 in this episode">56:29</a>)
                    <br>Okay. Okay.
                </p>

                <p>I'm getting angry now.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=56m54s"
                        data-turbo="false" title="Jump to 56:54 in this episode">56:54</a>)
                    <br>You're not going to testing your down methods to see how to ensure they work unless you're, I
                    don't know. But anyway, yeah, the, the, a complex down method that's especially it hasn't been
                    tested is more dangerous than no down method method at all. And, it kind of, anytime you have the,
                    you have to be really careful with your, your actual migration method. Like that's going in your
                    insert that's going in and not having that sense of consideration of like,
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=56m59s"
                        data-turbo="false" title="Jump to 56:59 in this episode">56:59</a>)
                    <br>crazy.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=57m24s"
                        data-turbo="false" title="Jump to 57:24 in this episode">57:24</a>)
                    <br>I could just roll back. You know, things go wrong, you know, I can see that take of like just
                    making sure it's correct. And, there have been times where I do want to roll back. So I do have, I
                    do have down methods on existing data tables, database tables. I will say that. yeah, yeah. But if
                    it's a new, if it's a new feature, new method, like, no, like we're either going to blow it away or
                    we're not going to have, like, I don't need to have rolled back this
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=57m41s"
                        data-turbo="false" title="Jump to 57:41 in this episode">57:41</a>)
                    <br>You will admit that you have down methods.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=57m54s"
                        data-turbo="false" title="Jump to 57:54 in this episode">57:54</a>)
                    <br>model like if it's I always just like to continue going forward like if there's something wrong
                    I'll just create another migration to fix it you know and there's been times where you know the the
                    down method is like deleting a table but or sorry the insert is deleting a table so the down method
                    needs to be recreating that table there's been so many migrations since then maybe I don't even know
                    what the table fully looks like and so I have to
                </p>

                <p>kind of look at table plus to kind of architect that out of like, well, this has an index and this is
                    over here. And then you have to look at foreign keys. It's just a mess. I'm like, I'm like just down
                    to it down. Forget about it. You know, either we're, know for sure when this deploys, that table is
                    gone. Like back it up. You know, if you, yeah, if you want it, if you want that thing to come back,
                    you gotta have some backups, but yeah, usually not. So if I'm creating a new table,</p>

                <p>or if I'm deleting a table, no down method. If I'm changing something, absolutely. If I'm changing
                    something from a string, VAR card to like a text, sure. Like if I need more, yeah, I'll absolutely
                    do a down method. But yeah, it's kind of my hot take on that. Just too much to maintain. They don't
                    really work when you want, like you don't ever use them. When you do use them, it probably won't
                    work because it's kind of testy. You make sure it does work because you want to, it hasn't been
                    thoroughly tested.</p>

                <p>You might break something else and then you're worse in the pickle than just creating a new migration
                    to fix it. You have some opinions, I can tell.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=59m24s"
                        data-turbo="false" title="Jump to 59:24 in this episode">59:24</a>)
                    <br>Hmm. no, I mean, I agree with everything that you're saying. Especially if I'm changing columns,
                    like if I'm going to drop a column and add a column, I'll usually have a down method for that. That
                    way, if I wanted to roll back, but yeah, I'm curious, like people listening, how often do you put a
                    down method? Like, are you using migrate refresh? Are you using migrate rollback? Like how often, I
                    don't think I've ever ran a rollback in production. I don't think I've ever done it.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=59m34s"
                        data-turbo="false" title="Jump to 59:34 in this episode">59:34</a>)
                    <br>Mm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=59m52s"
                        data-turbo="false" title="Jump to 59:52 in this episode">59:52</a>)
                    <br>I've done it in local. I don't think I've, I don't think.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=59m52s"
                        data-turbo="false" title="Jump to 59:52 in this episode">59:52</a>)
                    <br>I've done it probably I could count on my hands like how many times but it's very very rare like
                    shoot you know it's usually a Linux versus Mac issue like when it does happen like when it does it's
                    usually some discrepancy that something weird you know because we usually see I will always catch it
                    you know test will always catch it
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=59m59s"
                        data-turbo="false" title="Jump to 59:59 in this episode">59:59</a>)
                    <br>Yeah.
                </p>

                <p>Yeah, I mean it's great. I see both sides of our arguments. I'm curious on what other people use
                    because I can't fault you for what you said. That sounds right. I would use that for those use
                    cases. I use the down method just because that's what they come with when I create a migration file.
                    Maybe I just need to publish those stubs and get rid of them completely.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h0m36s"
                        data-turbo="false" title="Jump to 1:00:36 in this episode">1:00:36</a>)
                    <br>Yeah, yeah, and just get rid of that down method. My stuff, my, my steps for, my personal
                    websites do not have down methods, but they're nothing. They're nothing. you know, I don't need to,
                    it's continuous, you know, so I'm not going to sit there and, you know, create those, but I always
                    continue to go forward. I always see migrations as going forward. one thing I don't get too often
                    tangent with this, but like one thing I've always wanted ever since the beginning, when I was first
                    learning Laravel, Symphony had this, I believe.
                </p>

                <p>but I really want model based migrations. Like that would just be so nice. Do you know where I'm
                    going with this? Yeah, we got to talk about that sometime. But basically in your model, your user
                    model inside there, imagine having like, you type in a command and something with constraints that
                    you set up in your user model and it just creates a migration for you.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h1m9s"
                        data-turbo="false" title="Jump to 1:01:09 in this episode">1:01:09</a>)
                    <br>Bro, yeah, that's yeah, that's that's a whole podcast right there Agreed. All right, add it to
                    the list
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h1m33s"
                        data-turbo="false" title="Jump to 1:01:33 in this episode">1:01:33</a>)
                    <br>based on your schema that you have in your user model table. So you can have your schema set up
                    in your user model and it just, you type in like generate migration and it's loop and it generates a
                    migration. The tricky, I've started going down this road. The tricky part is, like, we're getting
                    into this topic, but the tricky, I'll keep it short, but I'll keep it short and sweet. But the
                    tricky part is, like Laravel is continuous. It's going forward. It, Laravel can't do, it can't go
                    back and, decide and roll through the method and decide where you're, where you're.
                </p>

                <p>tables are at the current state. so basically it, Laravel doesn't know, it doesn't have the ability
                    right now to know you need to change this from a text to a VAR card. I need to generate migration,
                    what that looks like. You have to, you have to like think of your own paradigm for that, like, and
                    how you're gonna solve that. But we'll get into that topic next show. Good, yeah. As I dove right
                    into it, yeah. But one thing, yeah, cause we're also wanted to.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h2m5s"
                        data-turbo="false" title="Jump to 1:02:05 in this episode">1:02:05</a>)
                    <br>Hmm.
                </p>

                <p>That's a teaser right there.</p>

                <p>Strong opinions.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h2m29s"
                        data-turbo="false" title="Jump to 1:02:29 in this episode">1:02:29</a>)
                    <br>we threw in here was migrations. There's a lot of debate here. Migrations versus Seeders. And we
                    had this come up not too long ago where I think it was fairly recent where you comment on a PR and
                    you're like, why is this a migration?
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h2m47s"
                        data-turbo="false" title="Jump to 1:02:47 in this episode">1:02:47</a>)
                    <br>Yeah, you put like some, don't, I think it was an insert method. You had an insert method in a
                    migration. You built a table and then you inserted values directly into that table, just like in the
                    next line. I was like, why, Tell me why.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h2m53s"
                        data-turbo="false" title="Jump to 1:02:53 in this episode">1:02:53</a>)
                    <br>Yeah.
                </p>

                <p>You're like what?</p>

                <p>Well, I think this goes from my early days because back in the day, back in like the layer of all
                    four and five days, you could not have factories and Seeders in production. It, just wouldn't like,
                    if you ran user factory, it would just be like, this doesn't exist. Cause I think it was actually
                    like a local development dependency. So I think that's where my mind started, like the first initial
                    thought. But then once you get past that, it's just like, when you have like permissions and stuff
                    as fundamental as like a schema.</p>

                <p>like your app won't function without permissions. I think it's so much easier to do a migration. The
                    tricky part is if I develop a new seeder, like I have a new permission coming in or I have a change
                    coming in, I have to create this seeder, like I have to figure out how to make that, put that seeder
                    into the deployment pipeline to like when my app deploys, I have to make sure it runs this random
                    seeder in there.</p>

                <p>And perhaps you can get something into our runs your Seeders every time and does it to check like if
                    this doesn't exist and create it if this is a great but that's just a nightmare. I just do
                    migrations. Yeah, I just do migrations. And another thing is this tester easier you can do you can
                    like set up the migration or you can set up the Seeders in your tests and do all that but I hate
                    that because if you're doing something like user controller you test you</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h4m8s"
                        data-turbo="false" title="Jump to 1:04:08 in this episode">1:04:08</a>)
                    <br>That's extra, extra maintainability.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h4m28s"
                        data-turbo="false" title="Jump to 1:04:28 in this episode">1:04:28</a>)
                    <br>You assert that the controller can create a user right, but if you have these Seeders are
                    already creating Authenticated admins in your app is then it's like so if you assert that One user
                    has been created you might have like 10 users and then you have this weird Quirk in your test code
                    of like well we were doing 10 here because the Seeder creates nine users and it's just ridiculous So
                    I'm just so tests are easier if you do migration
                </p>

                <p>And if permissions change, you maybe want it tracked in the migration. You can do a down method. You
                    know, you can't do down methods in Seeders. So I've done down methods before where if something's
                    weird about this new permission, or if I change a permission from one to another, I need it to
                    happen immediately. don't need to like once the migration fit, I need to ensure that the thing has
                    changed. And if something goes wrong, can.</p>

                <p>run a down commander, you know, if I needed to. So yeah, that's my cases for, I love migrations
                    really like Seeders for local development. Like we have a very large app that obviously, you know, I
                    never want to bring in production data. it just run Seeders in there, sets it up locally. Don't have
                    to, but Seeders in production. know. So, we're in the page.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h5m33s"
                        data-turbo="false" title="Jump to 1:05:33 in this episode">1:05:33</a>)
                    <br>Bingo. Bingo.
                </p>

                <p>Mm-hmm.</p>

                <p>No, no, no, no. Yeah, I'm in a hundred percent agreeance. I think Seeders are great for local
                    development. Like I'm coming into your site. I need to be able to get a user that doesn't have any
                    billing and information. need a user that has billing information. I need someone who has outdated
                    billing information. I need those three pieces so I can test if a bug comes up for one of those
                    three. I need a Seeder for that. I'm gonna run PHP, Artisan, Migrate, not rollback, but refresh,
                    dash dash seed.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h5m49s"
                        data-turbo="false" title="Jump to 1:05:49 in this episode">1:05:49</a>)
                    <br>Well, we agree. Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h6m14s"
                        data-turbo="false" title="Jump to 1:06:14 in this episode">1:06:14</a>)
                    <br>I want a fresh database, all the seeders run. I do not run seeders in production ever because
                    yeah, I'll have to add them to the deployment script and then remove them or I'll wait for it to
                    deploy and then manually run that command through Forge. But if it's stuff like permissions, there's
                    like 15, 30 seconds between the deployment being done, the migrations being run, and then me
                    manually running a seeder command. I forgot, know, something like that and it's broken.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h6m21s"
                        data-turbo="false" title="Jump to 1:06:21 in this episode">1:06:21</a>)
                    <br>Yeah.
                </p>

                <p>I need to that.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h6m43s"
                        data-turbo="false" title="Jump to 1:06:43 in this episode">1:06:43</a>)
                    <br>So yeah, I'm in 100 % agreeance. After I saw that, I had the perfect use case for it like a week
                    ago. And I added a migration that created a table. And then within that table, I was able to seed,
                    you know, four or five default information or default values into that table. And boom, it just, it
                    worked. All you had to do is PHP artists and migrate, done. You got the stuff, it's ready to go.
                    Yeah, I'm at 100 % agreeance.
                </p>

                <p>I think Seeders are great for local only.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h7m12s"
                        data-turbo="false" title="Jump to 1:07:12 in this episode">1:07:12</a>)
                    <br>All of the solid bros or separation of concerns, bros that, know, all it needs to be clearly,
                    you know, they'll say differently, just man, when real world comes to some of this stuff, it's just
                    when you, especially permissions, and that's my example, like when primarily use it, you just need
                    things to happen.
                </p>

                <p>as the application deploys, there's not at the moment, there's not like a streamlined process for
                    Laravel of like, hey, on this next deployment, I want to make sure this artisan command runs, but
                    just this one time, don't do it again. You know, like just run it this one instance of try to fix
                    something. There's not anything like that. So it's, there might be a package or something that does
                    it, but hey, migrations, just use those. It makes it easy. So, yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h7m58s"
                        data-turbo="false" title="Jump to 1:07:58 in this episode">1:07:58</a>)
                    <br>They're there and listen, the solid bros, if you've got a problem, you can add us. It's Andy,
                    whatever your Twitter handle is, Andy, Andy Hink, Andy H and K and MindStopMcClair, can at me.
                    That's fine. I don't care. All I'm going to tell you to do is you can write your cedar and then just
                    call the cedar in the migration file. Boom, we're both right. Gotcha.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h8m2s"
                        data-turbo="false" title="Jump to 1:08:02 in this episode">1:08:02</a>)
                    <br>Solid bros.
                </p>

                <p>Yeah, HNK, yep.</p>

                <p>Yep. How did that be? Great. I didn't think of that. could just call your cedar. Yeah. Well,
                    technically if you're depends on how your application, if you're in migration down, it's going to
                    fuss at you. But yeah, for sure. Yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h8m27s"
                        data-turbo="false" title="Jump to 1:08:27 in this episode">1:08:27</a>)
                    <br>Call your cedar in the migration. It's just an extra.
                </p>

                <p>That's just like an extra file, you know, I wouldn't do that. Why would I why would I? abstract that
                    to another file and I just call it right in that migration file Whatever man Add us</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h8m42s"
                        data-turbo="false" title="Jump to 1:08:42 in this episode">1:08:42</a>)
                    <br>Yeah, for sure. All right, man, it's been really good. Yeah, Atis, you want to close this out?
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h8m49s"
                        data-turbo="false" title="Jump to 1:08:49 in this episode">1:08:49</a>)
                    <br>Yeah, yeah, so I think this will be the last episode we do this year, so Merry Christmas, Happy
                    Holidays, Happy Kwanzaa, Hanukkah, all the other stuff, sorry if I forgot. We want to thank you for
                    listening. you've made it this far, double extra thank you to you.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h8m54s"
                        data-turbo="false" title="Jump to 1:08:54 in this episode">1:08:54</a>)
                    <br>Merry Christmas!
                </p>

                <p>You, I bless you, you are very technical. If you've made it this far, please reach out because you're
                    obviously you made it, you stuck with us. You are a very technical person because I bet just five
                    minutes in this show, like we jumped off the deep end. So appreciate that.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h9m19s"
                        data-turbo="false" title="Jump to 1:09:19 in this episode">1:09:19</a>)
                    <br>I just glazed over and like, whoa. Yeah, so if you made it this far, extra special, extra
                    special thank you to you. We really appreciate you and we'll be back in 2025 for more. So stay
                    tuned. Bye.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/do-you-write-down-methods-in-your-migrations-queue-serialization-stubs-laravel-pr-ideas-migrations-vs-seeders/transcript#t=1h9m22s"
                        data-turbo="false" title="Jump to 1:09:22 in this episode">1:09:22</a>)
                    <br>This is a very technical show, but that's what I like about it.
                </p>
            </section>
        </div>
</x-app>
