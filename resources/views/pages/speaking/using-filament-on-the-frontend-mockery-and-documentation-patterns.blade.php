<x-app>
    <x-slot name="seo">
        <title>Using Filament on the frontend, mockery, and documentation patterns</title>
        <meta name="description"
            content="Happy New Year! In this episode, we talk about our goals for the year, dive into the latest Laravel updates, and explore model-based migrations. We also chat about using Filament components outside the admin panel, the struggles of testing with Mockery, and why GitHub Wiki's never work out.">
        <meta property="og:title" content="Using Filament on the frontend, mockery, and documentation patterns">
        <meta property="og:description"
            content="Happy New Year! In this episode, we talk about our goals for the year, dive into the latest Laravel updates, and explore model-based migrations. We also chat about using Filament components outside the admin panel, the struggles of testing with Mockery, and why GitHub Wiki's never work out.">

        <script type="application/ld+json">
            {
            "@context": "https://schema.org/",
            "@type": "PodcastEpisode",
            "url": "https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns",
            "name": "Using Filament on the frontend, mockery, and documentation patterns",
            "datePublished": "2025-01-24",
            "timeRequired": "PT53M47S",
            episodeNumber: "12",
            "description": "Happy New Year! In this episode, we talk about our goals for the year, dive into the latest Laravel updates, and explore model-based migrations. We also chat about using Filament components outside the admin panel, the struggles of testing with Mockery, and why GitHub Wiki's never work out.",
            "associatedMedia": {
                "@type": "MediaObject",
                "embedUrl": "https://www.youtube.com/watch?v=lotzG3Ikrpc"
            },
            "publisher": {
                "@type": "Organization",
                "name": "The Midwest Artisan",
                "url": "https://the-midwest-artisan.transistor.fm"
            }
        </script>
    </x-slot>

    <p class="py-2 text-center font-sans text-sm text-white/75">January 24, 2025</p>
    <h1 class="text-center font-sans text-3xl font-bold text-white md:text-5xl">Using Filament on the frontend, mockery,
        and documentation patterns</h1>

    <div class="mx-auto mt-8 max-w-3xl">
        <div class="px-4 pb-10">
            <iframe width="100%" height="180" frameborder="no" scrolling="no" seamless=""
                src="https://share.transistor.fm/e/3ea2ca1d?color=1F2937&background=101827"></iframe>
        </div>

        <div class="prose prose-lg px-4 dark:prose-invert">
            <div>Happy New Year! In this episode, we talk about our goals for the year, dive into the latest Laravel
                updates, and explore model-based migrations. We also chat about using Filament components outside the
                admin panel, the struggles of testing with Mockery, and why GitHub Wiki's never work out.
            </div>
        </div>

        <div class="mt-8 px-4">
            <iframe class="h-96 w-full" src="https://www.youtube.com/embed/lotzG3Ikrpc?si=NXchsI80UDk5CcsS"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <h2 class="mt-12 text-center text-2xl font-bold text-white">Transcript</h2>

        <div class="prose prose-sm px-4 dark:prose-invert">
            <div class="site-content-text site-episode-show-notes">

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=0m0s"
                        data-turbo="false" title="Jump to 00:00 in this episode">00:00</a>)
                    <br>Welcome to another episode of The Midwest Artisan. I'm your host, Andy Hinkle.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=0m4s"
                        data-turbo="false" title="Jump to 00:04 in this episode">00:04</a>)
                    <br>and I'm your co-host Don McCleary.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=0m7s"
                        data-turbo="false" title="Jump to 00:07 in this episode">00:07</a>)
                    <br>Tom, how you doing?
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=0m9s"
                        data-turbo="false" title="Jump to 00:09 in this episode">00:09</a>)
                    <br>Soon, all right, Andy, how about you?
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=0m11s"
                        data-turbo="false" title="Jump to 00:11 in this episode">00:11</a>)
                    <br>Doing alright dude. It's been a wild start of the year. I'm sure you can attest to that. Just a
                    lot of beginning of the year movements. Just trying to figure out some goals for this year. Trying
                    really hard. Pulling out of Aaron Francis' book. I don't know about you, but for me personally, I'm
                    ready to take on more than ever this year. And try really hard. Push really hard too.
                </p>

                <p>just hopefully not push myself to burn out. I just got to have some healthy phases, you know, but
                    that's just how I'm feeling. Just how I'm Feeling a, yeah, I got a bit of a, just a fire under me
                    lately just to, I don't know, just feeling more passionate than ever, especially when you have
                    children. I know you don't have children but, and I know you have your own passion as well. And so
                    I'm not saying anything like that, but it really fires you up just to kind of build, build a good
                    foundation for them to grow up into, you know, so.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=0m45s"
                        data-turbo="false" title="Jump to 00:45 in this episode">00:45</a>)
                    <br>just hard enough, you gotta get that passion running.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=1m9s"
                        data-turbo="false" title="Jump to 01:09 in this episode">01:09</a>)
                    <br>Yeah. Let's get deep. Yeah. Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=1m10s"
                        data-turbo="false" title="Jump to 01:10 in this episode">01:10</a>)
                    <br>Damn, he's starting out the first episode real deep. Okay,
                </p>

                <p>okay. Well, if you got a fire, can you at least help melt some of the snow that we got in the
                    Midwest? Because, geez.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=1m18s"
                        data-turbo="false" title="Jump to 01:18 in this episode">01:18</a>)
                    <br>Yeah.
                </p>

                <p>Yeah, lost power and I did a puzzle for the first time. We had a crazy, we had a crazy eye storm here
                    just to just to kind of give some context here in the Midwest. We had a crazy ice storm. We, I lost
                    power. You said you did not lose power, right? But I did a puzzle. Oh yeah, did a puzzle for the
                    first time in years, probably since I was a teenager. So that was exciting. My wife and I just got
                    together.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=1m26s"
                        data-turbo="false" title="Jump to 01:26 in this episode">01:26</a>)
                    <br>You
                </p>

                <p>I didn't. I had an alarm issue.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=1m46s"
                        data-turbo="false" title="Jump to 01:46 in this episode">01:46</a>)
                    <br>put the flashlight on just a little puzzle so let's go. So you said your alarm went off right?
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=1m51s"
                        data-turbo="false" title="Jump to 01:51 in this episode">01:51</a>)
                    <br>Yeah, sorry, I just, I'm laughing at the thought of you guys in like headlamps sitting at your
                    dining room table in the dark putting together a puzzle. Yeah, we live downtown and like a big water
                    main break happened in the road next to us. And that set off the entire apartment complexes fire
                    alarm. So every single unit was all blaring and people outside. And you know, it was like 2 AM that
                    night on a Sunday. And I was like, you know what?
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=1m57s"
                        data-turbo="false" title="Jump to 01:57 in this episode">01:57</a>)
                    <br>You
                </p>

                <p>Yeah.</p>

                <p>Just running it.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=2m18s"
                        data-turbo="false" title="Jump to 02:18 in this episode">02:18</a>)
                    <br>I'm not going outside. It's like nine degrees I'm just gonna stay in here and blow out my
                    eardrums and it lasted for about 30 minutes And that was real fun right on a Sunday night. You gotta
                    love it
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=2m30s"
                        data-turbo="false" title="Jump to 02:30 in this episode">02:30</a>)
                    <br>Dude, that'd be, for me, that'd be terrifying. You know that apartment complex that collapsed in
                    Florida? Don't remember the exact location, but this was like two years ago. I'm getting too into
                    the off topic here in the weeds, but it was like a couple years ago, this entire really nice
                    apartment complex collapsed, like the building completely just collapsed, but right before it
                    happened, they had like a water leak and the alarm went off. Similar, your case, they had a...
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=2m36s"
                        data-turbo="false" title="Jump to 02:36 in this episode">02:36</a>)
                    <br>Hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=2m56s"
                        data-turbo="false" title="Jump to 02:56 in this episode">02:56</a>)
                    <br>a significant water leak and the water was just so heavy on the unit that it collapsed and it
                    just fell on, know, basically all the units just collapsed on each other. So the horrific thing,
                    like hundreds of people died So not too scary with that could happen. No, if you a water leak. So
                    that would terrify if the alarm came on the middle of the night, because that's what happened, you
                    know, but that would terrify me. But I'm glad you're safe. Glad you're yours.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=3m8s"
                        data-turbo="false" title="Jump to 03:08 in this episode">03:08</a>)
                    <br>Alright, well, yeah, thanks for that nightmare fuel. Appreciate that.
                </p>

                <p>Thanks man, you</p>

                <p>as well.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=3m22s"
                        data-turbo="false" title="Jump to 03:22 in this episode">03:22</a>)
                    <br>digging
                </p>

                <p>yourself out. So have you been outside? Have you been outside in the snow?</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=3m27s"
                        data-turbo="false" title="Jump to 03:27 in this episode">03:27</a>)
                    <br>Can you tell by my pasty whiteness that I have not seen the sunlight in, well, yeah, about a
                    week, or no, it's been a little longer than two weeks since this snow. No, my window is still like
                    frozen, like the ice on my window, I can't see out my window, it's still frozen. That's how bad it
                    is outside.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=3m30s"
                        data-turbo="false" title="Jump to 03:30 in this episode">03:30</a>)
                    <br>No.
                </p>

                <p>Okay, that's good.</p>

                <p>Yeah</p>

                <p>Yeah, I</p>

                <p>pretty much refused to go outside to it just it's like 15 degrees awful like just miserable to step
                    outside in windy but my little boy he He's almost to now and just supposed to go outside and dive in
                    the snow just face first just So yeah, it's it's it's great time, you know, it makes it much easier.
                    So yeah</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=4m4s"
                        data-turbo="false" title="Jump to 04:04 in this episode">04:04</a>)
                    <br>Aww. Yeah, that's cute.
                </p>

                <p>Post video of him diving in that. I want to see that.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=4m10s"
                        data-turbo="false" title="Jump to 04:10 in this episode">04:10</a>)
                    <br>Yeah, to
                </p>

                <p>record. yeah, I have to do that. All right, let's get into it. There's been a lot of great stuff
                    moving with Laravel in the web dev community saw you put on here was big content releases with
                    Laravel.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=4m25s"
                        data-turbo="false" title="Jump to 04:25 in this episode">04:25</a>)
                    <br>Yeah, I've trying to get on Twitter again in the new year just to follow some people like Aaron
                    Francis and Taylor Outwell. And I've seen that Taylor's been retweeting a lot of stuff about this
                    big content trip that Larva went on recently to Excel, S-L, Excel, where they're basically, I I
                    assume since they funded them, lots of good like.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=4m46s"
                        data-turbo="false" title="Jump to 04:46 in this episode">04:46</a>)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=4m53s"
                        data-turbo="false" title="Jump to 04:53 in this episode">04:53</a>)
                    <br>little teasers of them saying, we've, we've recorded some podcasts and we've entered and we've,
                    we've interviewed Taylor Otwell, you know, and there, there might be something new with these
                    interviews. Cause how do you interview somebody who's been interviewed thousands of times before
                    he's been a pretty big face in Laravel and they were doing a bunch of cloud stuff. that just, it
                    gets my mind wondering of, you know, where, where Laravel puts their focus and what do they see
                    going forward past, you know, the release of Laravel cloud and the
                </p>

                <p>and the release of Laravel Nightwatch. It really seems that they're trying to push this content
                    studio type approach where they've got that Josh Seary guy. Sorry, I was waiting for one of my stuff
                    to go off, because I said the S word. But it's just wild to see the growth that Laravel's been going
                    in just in the last six months.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=5m36s"
                        data-turbo="false" title="Jump to 05:36 in this episode">05:36</a>)
                    <br>Yeah, he's good.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=5m51s"
                        data-turbo="false" title="Jump to 05:51 in this episode">05:51</a>)
                    <br>Before the summer, we didn't know anything about any of this stuff. And now it just seems like
                    not only did they put the pedal to the metal, they like jammed their foot through the floor. And
                    it's wild to see from where we started. I'm curious, like what are your thoughts on Laravel's like
                    almost content first approach on some of the stuff that they're doing recently?
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=5m52s"
                        data-turbo="false" title="Jump to 05:52 in this episode">05:52</a>)
                    <br>Yeah.
                </p>

                <p>Yeah, I love it.</p>

                <p>Yeah,</p>

                <p>it's very cool to see just like to your point, like, you know, six months or, know, before the
                    announcement, before everything, it was just kind of this like little frame or it wasn't little, but
                    you know, this framework that was just driven by, you know, the open source community. And now it's
                    really become into a full company and this transition. And it's, feel like it's been really good for
                    them. Obviously taking any type of VC can be kind of scary, you know, for the control that they can
                    put into. And it kind of makes me wonder too, like,</p>

                <p>kind of content that they're doing. I guess they're, my guess would be kind of talking his philosophy
                    on cloud and where it's at today and where it's going to be in the future, kind of what you're
                    learning to answer in those questions of like where level is going to go there. A lot of people have
                    been wondering why are we still going to take Laravel Vapor along for the ride and because it's
                    Laravel Cloud and Laravel Vapor are kind of similar while they're very vastly different but they're
                </p>

                <p>They're kind of similar in some aspects. both use AWS, they kind of serverless architecture and
                    that's something you may want to do with cloud. But he just said, hey, we're still gonna be doing
                    all that. We're still gonna be maintaining.</p>

                <p>And continuing that structure. so I love that he's kind of he stole the tailor that I knew 10 years
                    ago. Yeah, he is there in this transition. He just has not changed. always just give it everything
                    he has and then just not letting up And then also, like continuing to do like PR and Laravel, like
                    he's the only one that continues just to merge.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=7m44s"
                        data-turbo="false" title="Jump to 07:44 in this episode">07:44</a>)
                    <br>Every day.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=7m46s"
                        data-turbo="false" title="Jump to 07:46 in this episode">07:46</a>)
                    <br>Yeah, it's just so cool to see that in the community. And now more than ever with this whole
                    WordPress, I don't know if it's this whole WordPress dropout, but I'm seeing on Twitter anyway, I'm
                    seeing so many developers asking questions about where do I learn Laravel? This seems really
                    exciting, really cool. And I know some of that was driven by Primogen. did a live stream using
                    Laravel. And I think a lot of WordPress developers are kind of, maybe they're nervous. I don't know
                    what's going on.
                </p>

                <p>And I think they, this is just my guess, but I think they see all this stuff by Primogen. see, I know
                    PHP make had just transitioned to Laravel. And I see a lot of people asking, what do I learn
                    Laravel? And I see Jeffrey or whoever's running Laracast Twitter account replied all of them. Like,
                    but he gets tagged a lot from just community members. Like it's Laracast. And even over on Reddit,
                    like we've been picking up heavily on like, guys, where's the best place to learn Laravel? And it's,
                    on our FAQ people post. And it's like, we have a bot that kind of scans for that stuff.</p>

                <p>immediately, but we've been seeing a lot of that traffic too, of like, of, uh, you know, of those
                    posts being pulled down more, way more than normal people asking like, what do we learn? And so it's
                    really cool to see, like, it's really taken off. And I still believe strongly believe to this day,
                    like they're, Laravel is really hard to beat. Um, just for, uh, just for any web dev project</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=9m3s"
                        data-turbo="false" title="Jump to 09:03 in this episode">09:03</a>)
                    <br>Yeah. They've, they've, did we, did we say last time that they were getting very Apple,
                    Apple-esque? Like when you think of web development, PHP web development, Laravel is sort of the
                    Apple, Apple of that, of that thing. And I see, you know, Laravel cloud is like their new iPhone and
                    Laravel vapor is sort of last generation iPhone type, you know, stuff like the iPhone, whatever the
                    hell number we're on now, 16, 17 and four and vapor is like
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=9m9s"
                        data-turbo="false" title="Jump to 09:09 in this episode">09:09</a>)
                    <br>Yeah.
                </p>

                <p>I-</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=9m33s"
                        data-turbo="false" title="Jump to 09:33 in this episode">09:33</a>)
                    <br>iPhone 13 or whatever. So they're still gonna maintain it, but I do expect cloud to of eclipse
                    vapor at some point. I don't think they'll ever get rid of Forge because that's your own server. You
                    can do whatever you want, but I don't know. see a lot of the, pushing a lot of this content type
                    stuff a lot more than I've seen any other web framework company ever do. You know what I mean?
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=9m35s"
                        data-turbo="false" title="Jump to 09:35 in this episode">09:35</a>)
                    <br>Yeah, yeah, just more releases.
                </p>

                <p>Yeah,</p>

                <p>it'll be interesting. Like you mentioned being very Apple-like. It's funny because when I was at
                    Lercon watching the announcement of Cloud, Justin Jackson was sitting next to me.</p>

                <p>And by the like the third time that Taylor called out somebody else from his team to like talk about
                    a subject, he goes, are we at like an Apple conference? Like, cause that it's pretty much the next
                    I'm going to bring out the new lead of design at Laravel and he brings him on. It was just something
                    like Tim Cook did, you know? So it was, you know, just kind of flipping between different subjects
                    to different contexts instead of, you know, Laircon in Chicago, he talked about Nova. This is 20.
                </p>

                <p>2018 I think when I was there he talked about Nova but then like the rest the hour spent about talk
                    about what's new and Laravel and it was not like it was a lot of context switching yeah it's it's
                    crazy how much the community continues to grow.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=10m56s"
                        data-turbo="false" title="Jump to 10:56 in this episode">10:56</a>)
                    <br>Yeah, and they ain't gonna stop in the time soon, especially with that 57 mil.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=11m1s"
                        data-turbo="false" title="Jump to 11:01 in this episode">11:01</a>)
                    <br>Yeah, Chris Sev. Did
                </p>

                <p>you see Chris Sev this morning? Yeah, he's the director of DevRel at Laravel. So just hired today. An
                    hour ago. He's been, he's really, yeah, he's the, as his wife says, his wife did a Liricon talk, a
                    really good talk this past year. He says that he's pretty sure that he's Laravel's number two fan
                    next to Abigail. yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=11m12s"
                        data-turbo="false" title="Jump to 11:12 in this episode">11:12</a>)
                    <br>wow.
                </p>

                <p>Alright, alright, we see you Chris. We see you. Okay, good. Good, good. Yeah, yeah.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=11m31s"
                        data-turbo="false" title="Jump to 11:31 in this episode">11:31</a>)
                    <br>So yeah, we'll see. Yeah.
                </p>

                <p>It's been good. It'll be cool to... I'm</p>

                <p>so excited for these interviews. Like, any of them, I'm just like, have to drop whatever I'm doing.
                    Like, I gotta watch this. It's just, I don't know, just so, just so powerful and just watch what,
                    you know, these kind of things. Yeah. Yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=11m46s"
                        data-turbo="false" title="Jump to 11:46 in this episode">11:46</a>)
                    <br>It's exciting. it's odd
                </p>

                <p>to be excited about like, I don't know if it's odd, but it's odd to be excited about like developer
                    interviews. You see a lot of A-list people doing interviews for movies or whatever. And it's, I
                    don't know, it's good. I think it brings some good excitement to Laravel instead of letting it be
                    stale 24 seven and sort of outdated documentations,</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=11m52s"
                        data-turbo="false" title="Jump to 11:52 in this episode">11:52</a>)
                    <br>Yes, coding, programming, yeah. Yeah, it's good.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=12m11s"
                        data-turbo="false" title="Jump to 12:11 in this episode">12:11</a>)
                    <br>Like it's, it's healthy.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=12m13s"
                        data-turbo="false" title="Jump to 12:13 in this episode">12:13</a>)
                    <br>So last show we talked about model based migrations, about the kind of the concept of it. This
                    is something like I thought about, briefly mentioned it last show and, I feel like
                </p>

                <p>I feel like we need it in Laravel, if it's a community package, but I wanted to talk about your
                    thoughts on overcoming some of the hurdles. So to explain model-based migrations, do you want to
                    have a stab at it or do want me to do me go through it?</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=12m40s"
                        data-turbo="false" title="Jump to 12:40 in this episode">12:40</a>)
                    <br>You will probably say it better than I will because I will stumble my way through.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=12m46s"
                        data-turbo="false" title="Jump to 12:46 in this episode">12:46</a>)
                    <br>Sure, yeah, I mean, it's kind of a tricky thing to explain. so imagine and you have a user model
                    and inside there you have a method called schema and it returns a blueprint. so, and then inside
                    there, you're have like your, instead of migrations that you would typically have, you would have
                    like the migration blueprint inside this method.
                </p>

                <p>and when you click like or you enter in a command like migration generate and what it does is it
                    looks at your migrations folder and it runs through all your migrations to the very end and then it
                    looks at your each of your models in this case it's going to look at your user model and look
                    through if there's any changes in the schema and then if there is one it's going to create a new
                    migration</p>

                <p>and add it to the end of the migration files. So with the end goal of your user model, the schema in
                    the user model is the one-to-one to your database. So you can go in.</p>

                <p>look at it as, you know, like in reference or something, or if you want to make a quick change, you
                    don't have to fully understand how it works. I feel like every time I have to make a database
                    change, I need to go manually go look at tables plus, or I have to use that console command like
                    show model show, and then it'll kind of me some details in there. But, um, but then there's some
                    things missing, like you gotta be aware of any like, um, Postgres methods or anything, anything kind
                    of fancy happening. So that's where it kind of gets blurry inside the lines.</p>

                <p>So that's kind of explaining model-based migrations. Symphony has this.</p>

                <p>It's worked differently, but I think this would be the best way for it to work in Laravel. Symphony
                    has entities, right? Is that the right name of it? And it kind of worked differently. So, but yeah,
                    that's kind of the gist of it. And I personally would love it just to open up user model and boom,
                    there's your schema for your user model and if you make an update. So, I explain that well? Do have
                    anything to start off from that? I can go into the problems of why this feature has kind of died
                    over the years, but...</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=14m29s"
                        data-turbo="false" title="Jump to 14:29 in this episode">14:29</a>)
                    <br>Mm-hmm. Yeah.
                </p>

                <p>It's been elusive. think that's, I think that's literally one of the biggest things that I like about
                    symphony is that I don't really have to keep up with migration files or making sure that, Hey, I
                    need to change one column to another column. got to make a whole migration file, make sure that
                    runs, et cetera, cetera. If I can just go into my model, say, Hey, this column is now this or
                    whatever. And it just sort of does that Laravel thing where it just like, it just works would be the
                    icing on the cake. I mean, yes, there are problems, but I think you explained it.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=14m57s"
                        data-turbo="false" title="Jump to 14:57 in this episode">14:57</a>)
                    <br>Mm.
                </p>

                <p>Mm-hmm. Yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=15m20s"
                        data-turbo="false" title="Jump to 15:20 in this episode">15:20</a>)
                    <br>pretty well, you basically manage the schema of the model in the model file. You don't really
                    have to worry about migration files.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=15m30s"
                        data-turbo="false" title="Jump to 15:30 in this episode">15:30</a>)
                    <br>Yeah, yeah, yeah,
                </p>

                <p>what's good. Yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=15m33s"
                        data-turbo="false" title="Jump to 15:33 in this episode">15:33</a>)
                    <br>I was going to say, which is fine. I think it's just preference based, but if you have to do, if
                    it's one less file you have to go look into, I think that's, that's a big enough pro to at least try
                    it. But we know that there are, there are some cons. So like what's a, said you had some cons,
                    right? What's your biggest con?
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=15m52s"
                        data-turbo="false" title="Jump to 15:52 in this episode">15:52</a>)
                    <br>Yeah. Well, yeah.
                </p>

                <p>Well, just, just to develop, like just actually getting it to work properly. Um, let's just take like
                    migrations out of the picture of like, say migrations aren't a thing anymore.</p>

                <p>it looks, does a live look at your database, does a comparison with the, your schema table. So
                    migrations are essentially eliminated. So you could do something like that approach as well. The
                    problem is, the comparison, at least today there's not a way to like, like Laravel can look at your
                    migrations, run all the way through and then go look at your user table and then see the difference
                    and then know what to apply in the diff, you know, like, we need to apply an index here and Andy
                    included one.</p>

                <p>or if like, renaming a table, the schema has like rename in there. So are you going to have like, are
                    you going to have all these random rename things in your method? Like just kind of littered through
                    there, or I guess you could probably clean it up a little bit and adding a chain like rename, but
                    then it gets kind of like you say, like rename, active at, and then just</p>

                <p>and then change that to is active or something. It's just going to continue to chain in there. but
                    Laravel does have a great way to kind of do a diff of the incoming versus current and then apply the
                    diff, if that makes sense, in a new migration or something like that. So it's kind of just a
                    programming thing that we have to solve of like how to get through.</p>

                <p>the ORM So it's really tricky.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=17m25s"
                        data-turbo="false" title="Jump to 17:25 in this episode">17:25</a>)
                    <br>Yeah, you're fighting the framework a lot at this point, like a lot. And it's just, that's just
                    smells too, smells too bad. So yeah, I think that's probably your biggest con is that why would you
                    do this?
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=17m27s"
                        data-turbo="false" title="Jump to 17:27 in this episode">17:27</a>)
                    <br>Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=17m38s"
                        data-turbo="false" title="Jump to 17:38 in this episode">17:38</a>)
                    <br>What's the benefit? It's all nice in one file? Yeah, that's pretty sweet.
                </p>

                <p>You know, a major, my major version update could just totally break model-based migrations. And then
                    you just have to do the old way anyway. So I don't, it's great. would love for it to be baked in and
                    have some sort of really nice way where I just, Hey, I want to add a new column to my user's table,
                    you know, of like, you know, Google ID for whenever I do Google auth. And I don't have to hold and
                    make a whole new migration file and all of that junk. It's just.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=17m54s"
                        data-turbo="false" title="Jump to 17:54 in this episode">17:54</a>)
                    <br>Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=18m15s"
                        data-turbo="false" title="Jump to 18:15 in this episode">18:15</a>)
                    <br>It would be such a nice handy thing to have for quick, fast development, which is what I think
                    Laravel is trying to push for is that they're the number one like fast stuff. but so I think, I
                    think there's something you could probably hack together where it would be pretty, it would probably
                    work pretty nice, but man, it would be, it would kind of be a headache to do all of the databases
                    like Postgres would be, would be a little nasty.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=18m35s"
                        data-turbo="false" title="Jump to 18:35 in this episode">18:35</a>)
                    <br>Mm-hmm.
                </p>

                <p>And the diff, yeah.</p>

                <p>Yeah, there are sometimes I still use migrations like, for example, not too long ago, I changed like
                    a permission or a role to go from the name of string of admin to super admin, you know, and so,
                    well, I needed it to happen in a migration versus.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=18m45s"
                        data-turbo="false" title="Jump to 18:45 in this episode">18:45</a>)
                    <br>You know what mean?
                </p>

                <p>yeah.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=19m6s"
                        data-turbo="false" title="Jump to 19:06 in this episode">19:06</a>)
                    <br>you know, actually like pushing it to prod, oh, okay, I need to go to table plus and edit that.
                    just, I need it to all happen like at the same time. So I feel like there's still a place for
                    migrations, but it would be kind of cool. So TLDR of this, it'd be, you your schema and your user
                    model, and then you type in artisan, artisan migration generate, and it just like generates you the
                    migration of that. Jason.
                </p>

                <p>jmac, the Laravel shift, he has blueprint, which kind of does that some way. Basically you write, I
                    think it's in YAML, you write your pretty much your entire Laravel models in your app and you write
                    some commands with their, package and it generates these migrations and stuff for you. And so, but,
                    but the idea is like, can, you can base, know, you can create all these models and stuff off
                    business requirements. And it's like, as you're doing the documentation, you can just write up like
                    a YAML file, like what it would look like.</p>

                <p>and put that into Blueprint, I think he calls it, and then generation code. So kind of an interesting
                    concept. So I'm curious to like, I might poke around there to his code base to see what's happening
                    and what he's doing in migrations and how he's handling that. I don't think he's doing a diff, maybe
                    he is. Maybe he's doing some fancy stuff. He's a smart dude, so.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=20m21s"
                        data-turbo="false" title="Jump to 20:21 in this episode">20:21</a>)
                    <br>Hmm.
                </p>

                <p>Yeah, yeah, yeah, yeah. All right. Well, Jason, the gauntlet has been thrown. Figure this out for us,
                    please and thanks.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=20m30s"
                        data-turbo="false" title="Jump to 20:30 in this episode">20:30</a>)
                    <br>Yeah, he
                </p>

                <p>had some actually undocumented on Laravel.</p>

                <p>He had a really good PR come not too long ago. It was called like preventable or something like it's
                    a new trait. You include it in your command. And basically once you include this trait in your
                    command, it will not allow it to run in production like an artisan command. So it's like prevents
                    destructive actions. And so how to use case of that as well. Cause there's some things you just You
                    want to run locally, but or on staging, definitely not in production,</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=20m52s"
                        data-turbo="false" title="Jump to 20:52 in this episode">20:52</a>)
                    <br>okay.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=21m4s"
                        data-turbo="false" title="Jump to 21:04 in this episode">21:04</a>)
                    <br>yeah, it's just like, so it rejects it, it doesn't allow you to run it. So he submitted that.
                    It's not documented anywhere. So it's kind of like one of those little nuggets. There's some things
                    about Taylor, just like, yeah, it's...
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=21m2s"
                        data-turbo="false" title="Jump to 21:02 in this episode">21:02</a>)
                    <br>Get your heart palpitations.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=21m16s"
                        data-turbo="false" title="Jump to 21:16 in this episode">21:16</a>)
                    <br>anything undocumented is kind of scary way to go, right? Cause if you include it into your code
                    base, I've seen it before where Taylor's like, yeah, it's undocumented. So we're going to remove
                    this. So it's like, whoa, you know, that's good. That's pretty impactful. And so,
                </p>

                <p>That can be a little that can be a little tough sometimes but But there's a lot of like a little
                    undocumented nuggets or you know, occasionally I'll submit a PR and Taylor's like yeah I don't want
                    to submit this in right now, you know for various reasons I think I understand it from him of
                    There's some methods that if you're reading this as a new person, you don't want to assume that this
                    is the default It's one of those like you you really have to have some really complex like ends of
                    the earth like stuff and Laravel to go</p>

                <p>And, you know, obviously he doesn't want to type that stuff up like this is advanced method or
                    whatever. So I get it. But yeah, it's just one of those. It's like you try to, for him, I think he's
                    just trying to find that line of making sense in the documentation. Where does it go? But yeah, it's
                    tricky.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=22m20s"
                        data-turbo="false" title="Jump to 22:20 in this episode">22:20</a>)
                    <br>It's like
                </p>

                <p>the secret menu of In-N-Out.</p>

                <p>There's a secret menu to Laravel. There's some methods that nobody knows unless you like dive into
                    the source</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=22m23s"
                        data-turbo="false" title="Jump to 22:23 in this episode">22:23</a>)
                    <br>Yeah, right. Secret menu.
                </p>

                <p>Yeah, that's fun. If you ever just, you have a couple of minutes, just like in your in Solarevel,
                    just right click and go a little bit of source diving. It's a fun thing to do. Just like
                    understanding how it works Everything is a collection, if you're wondering. Everything is converted
                    into a Solarevel collection. It's fascinating.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=22m49s"
                        data-turbo="false" title="Jump to 22:49 in this episode">22:49</a>)
                    <br>Yeah, there should be a new term for that whenever you dive into an open source's source code.
                    Like you've got spelunking, you know, when you're like mining and stuff. We'll workshop that later.
                    What we want to call diving into Laravel source code to find their quote unquote secret menu.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=23m6s"
                        data-turbo="false" title="Jump to 23:06 in this episode">23:06</a>)
                    <br>Yeah, for sure. So.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=23m7s"
                        data-turbo="false" title="Jump to 23:07 in this episode">23:07</a>)
                    <br>Maybe that'll be another topic.
                </p>

                <p>We'll talk about secret menu stuff next time.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=23m11s"
                        data-turbo="false" title="Jump to 23:11 in this episode">23:11</a>)
                    <br>We should do like, I'm gonna add this, we should do a topic on undocumented Laravel things,
                    because I have a notebook where I run into this stuff. And in case you'll all submit a PR on it, and
                    a few of them have been denied, and I'll talk about those, so that'll be good talk. So. All right.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=23m28s"
                        data-turbo="false" title="Jump to 23:28 in this episode">23:28</a>)
                    <br>Yeah, yeah, Yeah, yeah, I agree. I agree. Well, I mean,
                </p>

                <p>speaking of like secret menu stuff, I don't know how often you work with filament outside of the
                    filament panel, but I have been introduced to a few projects recently about using filament like
                    components, input fields and section groupings outside of the filament panel. So basically just like
                    in a blade view randomly.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=23m57s"
                        data-turbo="false" title="Jump to 23:57 in this episode">23:57</a>)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=23m57s"
                        data-turbo="false" title="Jump to 23:57 in this episode">23:57</a>)
                    <br>Like in a
                </p>

                <p>random blade view.</p>

                <p>But it's actually quite nice. And I find myself reaching for it now that I'm doing a couple other new
                    projects about using filament. It's got me thinking of like, why, why have I never thought of doing
                    this before? Like using filaments input fields for a form instead of building my own input fields
                    and you know, my own custom wrappers with alpines that says, Hey, you've got an error, know, change
                    the border to red and et cetera, et cetera. So I'm curious on your thoughts of.</p>

                <p>Filament outside of filament. Does that make sense?</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=24m32s"
                        data-turbo="false" title="Jump to 24:32 in this episode">24:32</a>)
                    <br>Yeah,
                </p>

                <p>yeah it does. That's actually how filament markets itself and because, and I think that's how, what
                    Taylor, Taylor has, I keep mentioning Taylor for some reason. Taylor has mentioned of like that was
                    his understanding of what filament is. It's like a way to build your front end and back end.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=24m44s"
                        data-turbo="false" title="Jump to 24:44 in this episode">24:44</a>)
                    <br>We love you.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=24m52s"
                        data-turbo="false" title="Jump to 24:52 in this episode">24:52</a>)
                    <br>And, people that you actually use filament, it's, it's used in kind of a way, like this is where
                    the comparison of Nova comes in. It's used just strictly on the backend. And so, but then what a lot
                    of people don't realize is that you can take the same components and use them on the front end. And
                    so, that's really cool. My thing of like why I always paused is.
                </p>

                <p>well traditionally I just already have the front end done and the admin kind of comes in later. but
                    then, secondly, it's just like, for styling. So I'm curious, like, okay, how does that, I hate
                    talking code like out loud, but how does that work on the front end with styling? If I want to
                    include a filament form on the front end, how do you do that and include like the site styling?</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=25m33s"
                        data-turbo="false" title="Jump to 25:33 in this episode">25:33</a>)
                    <br>I think you just include that's like it's so film that publishes like it's on CSS and
                    JavaScript. think you just include those as is.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=25m43s"
                        data-turbo="false" title="Jump to 25:43 in this episode">25:43</a>)
                    <br>So in the admin panel, does it look the same as your front end then? Is that how it works?
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=25m47s"
                        data-turbo="false" title="Jump to 25:47 in this episode">25:47</a>)
                    <br>Well no, it's like vice versa. So you would use your own app layout blade file and just say,
                    hey, know, X filament button. And that would be the filament button. And since it's Tailwind, I
                    think you can either include filament stuff or what this project does is it just searches the
                    filament vendor file in your Tailwind config as a source. Saying, hey, anything in here that has
                    Tailwind components we want to extract into your style sheet. And so you just include your one style
                    sheet.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=25m52s"
                        data-turbo="false" title="Jump to 25:52 in this episode">25:52</a>)
                    <br>Okay.
                </p>

                <p>Mm-hmm. Yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=26m17s"
                        data-turbo="false" title="Jump to 26:17 in this episode">26:17</a>)
                    <br>And I think they, least the JavaScript file because it's got, well, it's got Alpine and
                    LiveWare, so you don't really need that. But it's odd and I've only seen it on enterprise level
                    stuff. like the stuff we were doing before was all, know, let's put it in a filament panel. It's
                    probably going to be a CMS or CRM. We don't really need to manage the view. We'll just let filament
                    handle all the view stuff. But if it's like this enterprise app that I'm working on, you know, they,
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=26m22s"
                        data-turbo="false" title="Jump to 26:22 in this episode">26:22</a>)
                    <br>That's fascinating.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=26m47s"
                        data-turbo="false" title="Jump to 26:47 in this episode">26:47</a>)
                    <br>They want to have a brand for it, but they don't really want to sort of build this whole UI kit.
                    Like let's just use filament as the UI kit and put our own styles, you know, on the buttons. Like
                    the primary button is whatever blue color we want. And the warning is whatever yellow color we want.
                    It's just, it's, it is a different way of thinking. And I guess I was one of those people was like,
                    I was just thought filament was like Nova. Like you only use it in, in its panel.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=27m8s"
                        data-turbo="false" title="Jump to 27:08 in this episode">27:08</a>)
                    <br>Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=27m15s"
                        data-turbo="false" title="Jump to 27:15 in this episode">27:15</a>)
                    <br>as its own little slice of your application that sits alongside all your other code. But this
                    one's like, you're integrating it in almost like, you know, flux components, essentially. You know,
                    the inputs, the sections, you can sort of style those how you want. It's weird, it's kind of just
                    like a UI kit at this point.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=27m34s"
                        data-turbo="false" title="Jump to 27:34 in this episode">27:34</a>)
                    <br>That's wild to think about in that way. I love how you can set it up on the back end.
                </p>

                <p>in the front end and it's one to one, it's mirrored to each other because I mean, how many times
                    I've, I'm guilty of this, of like where I changed a front end value, like on a form or something, to
                    some context and then, I push it and yeah, and then I get some other tasks that, filament's broken
                    or that admin panel is not working as it should. And then I have to like, yeah, I need to go fix
                    that admin panel too. And, we can, we have, you know, obviously we can have tests and things,</p>

                <p>It could be, you know, if it's mirrored to each other, you have one singular test that that checks
                    filament, you know, you don't have two tests with front end and the back end or checking for
                    filament. That's a drag to do, by the way, like there's so many times I'm like, I have to go back to
                    filament and create a test for that in the back end and to do the front end on the same form, just
                    to make sure it works. But anywho, yeah, that's that's very interesting. So let me ask you, if you
                    are, you have a back end, you have a form like a contact form.</p>

                <p>And, but on the front end, you want to add extra spacing or your maybe you're locked in on a
                    particular styling where you have to like you have to input side by side to each other, but maybe
                    the front end, it's just too tight and you want to make them like full width on and stack on top of
                    each other and stuff. So 50 % you would go full width. So is that</p>

                <p>Have you gotten that far or is it like to figure out how to do that or like can you in filament? Can
                    you like add an extra attribute like hey if this is front end do this class or how does that work?
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=29m12s"
                        data-turbo="false" title="Jump to 29:12 in this episode">29:12</a>)
                    <br>Yeah, admittedly, I'm only like a week new to this. So, and that seems like an advanced secret
                    menu question. So I don't have your specific answer, but I know that they use their own layout file
                    here. So it's not like, it's not the filament sidebar and it's not the filament top bar. It's its
                    own, it doesn't have any of that. So they've got their own sort of layout, but it uses the default
                    styling for like sections.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=29m15s"
                        data-turbo="false" title="Jump to 29:15 in this episode">29:15</a>)
                    <br>Okay. Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=29m39s"
                        data-turbo="false" title="Jump to 29:39 in this episode">29:39</a>)
                    <br>and field groups and inputs and buttons and stuff like that. So it's more of a way to, I guess,
                    get around whatever layout filament imposes with it being the sidebar, the collapsible stuff. And I
                    don't, admittedly, I don't know the decision on why this was made. I just was like, that's a pretty
                    cool, I guess, use case of filament as a UI kit. And what really fired my brain is that we've been
                    talking...
                </p>

                <p>Ever since Nova came out, we were talking about using Nova as a CMS and having this sort of live page
                    builder. Like when you're building a page in Nova as a CMS, I want to see a preview of it on the
                    side. We talked about this for years. I don't know if you remember. And we were using whatever
                    nestable, repeatable package for Nova at the time. like, I can't wait for this to be live preview.
                    And the filament came out, we're like, you kind of probably could do that now with LiveWire. And I
                    think</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=30m21s"
                        data-turbo="false" title="Jump to 30:21 in this episode">30:21</a>)
                    <br>Yep, I do remember that, yep.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=30m36s"
                        data-turbo="false" title="Jump to 30:36 in this episode">30:36</a>)
                    <br>now using filament as a UI kit, you could theoretically build that sort of idea of a live
                    preview, live editing page builder as its own UI kit. You're not constrained to sort filaments
                    stuff. So I think I'm going to try that now. So I might have some more stuff to report on how to use
                    filament outside of filament, but it's got my gears turned in.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=30m40s"
                        data-turbo="false" title="Jump to 30:40 in this episode">30:40</a>)
                    <br>You should definitely do it. Yeah.
                </p>

                <p>Yeah.</p>

                <p>Yeah, let's get it. Yeah, cut that. Yeah.</p>

                <p>Yeah,</p>

                <p>my life preview stuff is cool, especially on CMS is where, you know, we, at the agency, we get
                    clients sometimes, not too often, but they want to actually see real time. Like they type in
                    something before they hit save what it's going to look like, because when they hit save, it's going
                    to be, it's kind of this whole like.</p>

                <p>It's kind of this whole cycle because if they hit save, it's going to be instantly live, but if they
                    hit like draft or something, the pages could be unpublished, then they have to go look at it, then
                    republish page. So doing the live preview kind of eliminates all those needs of like, here's what
                    it's going to look like. File uploads will be tricky. I'm curious how you're going to tackle that.
                    yeah, like images and stuff like that, but it'll be good.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=31m44s"
                        data-turbo="false" title="Jump to 31:44 in this episode">31:44</a>)
                    <br>Ugh.
                </p>

                <p>Yeah, that hurts my brain to think about. That's on my radar. I want to try a live page builder with
                    using filament outside of film.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=31m52s"
                        data-turbo="false" title="Jump to 31:52 in this episode">31:52</a>)
                    <br>We'll get there, we'll get there. I'm curious, we'll talk about it, yeah.
                </p>

                <p>Yeah,</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=32m2s"
                        data-turbo="false" title="Jump to 32:02 in this episode">32:02</a>)
                    <br>and I'll report back.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=32m2s"
                        data-turbo="false" title="Jump to 32:02 in this episode">32:02</a>)
                    <br>yeah, I love filament. So good. Yeah, yeah, so Dan, what's his name? The filament guy, Dan, he,
                    yeah, yeah, I think that's right. he,
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=32m13s"
                        data-turbo="false" title="Jump to 32:13 in this episode">32:13</a>)
                    <br>Dan Hart...
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=32m19s"
                        data-turbo="false" title="Jump to 32:19 in this episode">32:19</a>)
                    <br>He works for like a company. All their code is public. it's so it's like so cool to see
                    obviously it's all like licensed so you can't reuse it or you can't do any of that. But but it's
                    just so cool to see that all their code like out there in publics Canyon GBS I think the name of it.
                    But they they're doing something similar over there. That was the first time I seen that. was like
                    wow that's a really neat way to approach that of going on the front end in the back end. So that's
                    really neat.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=32m47s"
                        data-turbo="false" title="Jump to 32:47 in this episode">32:47</a>)
                    <br>Yeah, just another little tool belt thing I think you can use. there's something wicked
                    complicated in filament and you can't do it in a filament page, why don't you bring filament to your
                    own page?
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=33m0s"
                        data-turbo="false" title="Jump to 33:00 in this episode">33:00</a>)
                    <br>I'm all about one source of truth,
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=33m1s"
                        data-turbo="false" title="Jump to 33:01 in this episode">33:01</a>)
                    <br>Filament outside of filament, hashtag.
                </p>

                <p>Not a sponsor. Just kidding, I do sponsor filament, but they don't sponsor us. Moving on.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=33m12s"
                        data-turbo="false" title="Jump to 33:12 in this episode">33:12</a>)
                    <br>Sure,
                </p>

                <p>yeah. So one thing I wanted to bring up is mockery and I'm not talking about like the HTTP facade
                    mocks. Those are great. Or anything with like Laravel's facade mocking like QMock or Qfakes. Yeah,
                    those are great. But I'm talking about the mockery library. that is just...</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=33m28s"
                        data-turbo="false" title="Jump to 33:28 in this episode">33:28</a>)
                    <br>Too fake. Yeah.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=33m35s"
                        data-turbo="false" title="Jump to 33:35 in this episode">33:35</a>)
                    <br>unbelievably hard. I don't understand why it's so hard. I just, I don't get the Mercury Library.
                    I see so many examples. Like what the heck does a partial mean? I'm even dumb. Yeah, alias, yeah,
                    yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=33m44s"
                        data-turbo="false" title="Jump to 33:44 in this episode">33:44</a>)
                    <br>Or an alias or overload like what do
                </p>

                <p>what do I use those for?</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=33m49s"
                        data-turbo="false" title="Jump to 33:49 in this episode">33:49</a>)
                    <br>It could just be,
                </p>

                <p>it could be a terminology thing. I don't know if you experienced this, but like I was using the, the
                    spotty, the, the maps package or, it was like a store locator kind of thing. they have, they have a
                    package that does that and I needed to, they had some, they had some things going on where they were
                    hitting Google and I didn't need to do that. and so was trying to like say, Hey, if you just, I just
                    want to like tell a library, if you ever just touched this method on this class, on this library,
                    return this exact thing.</p>

                <p>And that is just so complicated to do. If like you're in your user controller, I would expect if like
                    in the mockery thing, would, I think you would have to call, like I was expecting to call that the,
                    the, the spotty library, but it was like, no, you need to call your user controller and tell like
                    your user controller when you hit this method on that library, then that's where it's going to
                    happen. And so, but then when you're looking at the test, it's so confusing.</p>

                <p>I don't know, it's like, it's very complicated to write any type of mockery in the libraries and
                    so...</p>

                <p>And then I knew Noah was streaming and I noticed he well he was doing he was writing a feature for
                    Laravel and I noticed he wasn't mocking He wasn't like he just he had like an environment variable
                    where he just switched on and off and I asked him like why don't you do mocks? And he went into this
                    like really long-depth thing I didn't I didn't expect that like why he hates mocks and why he
                    doesn't do mocks. It's just because he's talking about how it hides It really hides the application
                    from the source of truth like what's truly</p>

                <p>happening. That's a good point, I just basically I just don't want to call up Google and I don't have
                    to like put in these weird A and V care like variables into my test unit just to be able to hit a
                    live API. I want to basically mock that response and so.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=35m16s"
                        data-turbo="false" title="Jump to 35:16 in this episode">35:16</a>)
                    <br>Hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=35m29s"
                        data-turbo="false" title="Jump to 35:29 in this episode">35:29</a>)
                    <br>Yeah, it's like, mockery is just kind of, you know, it needs some love. needs, it needs like, I
                    would love just if you had a method or something to just like put a couple of fake things on there
                    or like the colon colon fake and then maybe pass it this method, this is what it responds with. It's
                    just, it's way more cumbersome than it needs to be, right? Am I dumb for thinking that? I don't get
                    it.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=35m49s"
                        data-turbo="false" title="Jump to 35:49 in this episode">35:49</a>)
                    <br>No, you are not dumb at all. I agree a thousand percent, a thousand percent.
                </p>

                <p>I actually, I've got a use case on why I hate mockery as well. don't hate it, but it's really, really
                    hard when like you're trying to do some like deep level stuff. So the package that I made and
                    published Conduit, RapidSass Conduit for Merge Loop, I had in there a class that would look using
                    the composer</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=35m59s"
                        data-turbo="false" title="Jump to 35:59 in this episode">35:59</a>)
                    <br>I'm excited to hear this.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=36m18s"
                        data-turbo="false" title="Jump to 36:18 in this episode">36:18</a>)
                    <br>what is it, the Composer facade where it would look at your installed packages via Composer. I
                    think it was like Composer colon colon installed version, whatever it is. I was basically looking to
                    see if you had Stripe installed or if you had a Composer package for Paddle. Based on that, this
                    package would do certain things based on that payment provider.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=36m25s"
                        data-turbo="false" title="Jump to 36:25 in this episode">36:25</a>)
                    <br>Mm-hmm. Yeah.
                </p>

                <p>Mm-hmm.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=36m46s"
                        data-turbo="false" title="Jump to 36:46 in this episode">36:46</a>)
                    <br>I spent probably several nights trying to figure out how to write tests for that. Like how do I
                    test the checkout flow for Stripe? Now how do I fake the paddle package being installed and run all
                    my test suite again to make sure that that works? And I literally couldn't figure it out. So I
                    switched that whole project from using this really nice, elegant way of determining what payment
                    provider you had installed and I had to use a config variable.
                </p>

                <p>Like I had to publish, I now publish a config file that had a variable that says what payment
                    provider you're using, Stripe or Paddle or et cetera, et cetera. And then now in my tests, I could
                    just say, Hey, config set, you know, to Stripe or config set to Paddle. And it just, it made me
                    really hate it. It's like, I had a really nice elegant solution and I was testing it locally. I was
                    like, this is awesome. I don't have to do any config. It's, know, hands off config. just figures out
                    what you're using and can run with it. So now I have to use a config variable like every other
                    package out there.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=37m14s"
                        data-turbo="false" title="Jump to 37:14 in this episode">37:14</a>)
                    <br>Hmm.
                </p>

                <p>Yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=37m45s"
                        data-turbo="false" title="Jump to 37:45 in this episode">37:45</a>)
                    <br>And my tests suffer for it. Cause I could not figure
                </p>

                <p>it out. How do you, I couldn't, I couldn't do it. Could not do it.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=37m52s"
                        data-turbo="false" title="Jump to 37:52 in this episode">37:52</a>)
                    <br>Yeah, in that situation where I would think like a fixture, like a...
                </p>

                <p>like a file, you know, like would have like a fake set of composer packages underneath. know like
                    Laravel cloud, they do some fake stuff of like where they include this fake array of repose, you
                    know, to be included into their little Laravel cloud project to, when they like seed a project. And
                    so maybe something like that we might work in that case, but yeah, it's just like, you want to reach
                    for mock. I hate changing code for tests to be allowing to use our tests. Yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=38m22s"
                        data-turbo="false" title="Jump to 38:22 in this episode">38:22</a>)
                    <br>Yes, that's what I'm getting at. Yeah, exactly.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=38m26s"
                        data-turbo="false" title="Jump to 38:26 in this episode">38:26</a>)
                    <br>And in setting up like, you know, fixtures and all that's nice and then controlling that through
                    an environment variable, but then you have to swap them out. But then it's like you really want to
                    test the actual source of truth. It's hard. So.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=38m37s"
                        data-turbo="false" title="Jump to 38:37 in this episode">38:37</a>)
                    <br>Yeah. And you know, the one that I was using, you know, spanned across the whole application. So
                    I couldn't, I couldn't set it once in like, you know, my basic test case saying, you know, set the
                    config to Stripe. Cause now I basically had to write three different versions of tests for all the
                    payment providers. So I had to set them in every single file possible. And you know, during the
                    checkout, you know, I've got to mock three different composer packages essentially for it. And it
                    just, it never, it never worked. It never worked right.
                </p>

                <p>Just the way the tests run when you set things up, you know, and pest with that before all or before
                    each, like it just, I don't know what the hell I lost several nights of development on, that
                    approach. What I thought was going to be really nice and inconvenient for the developer, just turned
                    into a massive headache because of I couldn't figure out mockery. I've tried and overload, which I
                    thought was, you know, it's supposed to overload it in the entire application. I don't know, man.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=39m19s"
                        data-turbo="false" title="Jump to 39:19 in this episode">39:19</a>)
                    <br>Yeah.
                </p>

                <p>Mm-hmm.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=39m35s"
                        data-turbo="false" title="Jump to 39:35 in this episode">39:35</a>)
                    <br>So I feel the pain, firsthand experience of like, this should not be that hard to mock a method
                    of a vendor file across the application. It shouldn't be that hard. It should be a one line thing.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=39m47s"
                        data-turbo="false" title="Jump to 39:47 in this episode">39:47</a>)
                    <br>Mm-hmm, yeah. Yeah,
                </p>

                <p>I'm always, you know how much of a...</p>

                <p>stickler I'm on testing of like if something's untested I like lose my mind and so if like just like
                    when it when there's a new code change it just it's hard on some you know just hard to maintain it
                    for the future or if another developers looking at it they they break something you know I just want
                    to make sure it's it's it's solid for the future but I was working on I was working on a like a
                    personal website actually for my church it's like it is a YouTube integration</p>

                <p>Checking in for like live streams and that was also another situation where I needed to mock YouTube
                    like the response I couldn't figure it out. I was like, yeah, I just got to a point like It took
                    everything in me. I'm like, I'm not gonna write a test for this just gonna move on So like I know it
                    works and you know, But basically it's actually really cool. I've been thinking about writing up a I
                    don't get too off topic But it's like what it does is it downloads the YouTube live stream?</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=40m31s"
                        data-turbo="false" title="Jump to 40:31 in this episode">40:31</a>)
                    <br>Ha
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=40m44s"
                        data-turbo="false" title="Jump to 40:44 in this episode">40:44</a>)
                    <br>And it pulls the subtitles like it'll generate uses chat GPT like they have a It converts into
                    an mp3 and then it sends it over to chat GPT and converts it to captions and then I could take those
                    sub captions and make descriptions and do social media stuff with them, so it's a yeah, it's kind of
                    it's kind of neat how that but yeah couldn't figure out a market don't know GPT now I do open a Open
                    the PHP open AI package has have like a really good thing on faking responses that works
                    tremendously
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=40m54s"
                        data-turbo="false" title="Jump to 40:54 in this episode">40:54</a>)
                    <br>Yeah. Yeah, yeah, yeah.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=41m14s"
                        data-turbo="false" title="Jump to 41:14 in this episode">41:14</a>)
                    <br>But those packages that don't, it's tough. So, yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=41m18s"
                        data-turbo="false" title="Jump to 41:18 in this episode">41:18</a>)
                    <br>Yeah, especially
                </p>

                <p>like, I mean, baked in Larva ones. I don't want to tell the whole same story a second time, but that
                    same, that same conduit package I had, I've ran into this twice because with conduit, I've got, you
                    know, a cart that you can make and I've made it to where, you know, it can set a cookie for
                    anonymous people and mocking the cookie class in tests. don't, I don't want to deter your deter
                    anybody from using, you know,</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=41m42s"
                        data-turbo="false" title="Jump to 41:42 in this episode">41:42</a>)
                    <br>Yeah, yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=41m47s"
                        data-turbo="false" title="Jump to 41:47 in this episode">41:47</a>)
                    <br>my conduit package, but I don't have tests for that cookie part because I don't know how to
                    figure it out. You have to mock whatever the underlying thing is and it was just the biggest pain in
                    my rear end possible. So there are very minimal tests for that cookie part because I couldn't figure
                    it out.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=41m50s"
                        data-turbo="false" title="Jump to 41:50 in this episode">41:50</a>)
                    <br>How do you, how do you mock a cookie?
                </p>

                <p>Yeah.</p>

                <p>Hmm. Yeah, I just thinking</p>

                <p>openly. I don't even like if some, if we're doing something that was based off of a public cookie, I
                    couldn't think of something I had off of how to walk a cookie with that. Yeah. So you'd have to,
                    yeah, figure that out, but tricky.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=42m14s"
                        data-turbo="false" title="Jump to 42:14 in this episode">42:14</a>)
                    <br>Yeah, so.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=42m17s"
                        data-turbo="false" title="Jump to 42:17 in this episode">42:17</a>)
                    <br>That's what I'm like. Every time I have to reach for the market class, like, here we go. Like,
                    I'm going to give myself plenty of time because it's going to take me a while to figure this out.
                    So, yeah. Yeah, you mentioned. Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=42m28s"
                        data-turbo="false" title="Jump to 42:28 in this episode">42:28</a>)
                    <br>Oof. Nightmare fuel right there. And the docks, the docks are great. they're, you can't fault
                </p>

                <p>them for the docks. It's just, damn, that the concept is really hard.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=42m38s"
                        data-turbo="false" title="Jump to 42:38 in this episode">42:38</a>)
                    <br>Yeah, you mentioned docs and documentation. One thing, the last thing I'll leave with is to stop
                    using the GitHub. How do you say that? Wiki, okay, because when I read it versus when I say it, just
                    two different things. So stop using the GitHub Wiki. And use the repo docs, like slash docs. Use
                    your repository instead.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=42m48s"
                        data-turbo="false" title="Jump to 42:48 in this episode">42:48</a>)
                    <br>Wiki.
                </p>

                <p>Thank you.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=43m3s"
                        data-turbo="false" title="Jump to 43:03 in this episode">43:03</a>)
                    <br>I've come across a few repos where they don't have documentation at all. Or they're in the repo
                    and they're several years old. Or if it's just in the actual documentation area, or just in slash
                    docs, it's actually kind of useful because if you're in the code, you can just open the file. You
                    don't have to source over the GitHub and read all the docs or whatever.
                </p>

                <p>And I feel like they're not as updated if they were in the docs file. think it and hear me out. I've
                    been kind of looking into what it take to get to create a GitHub action and how this action would
                    work is it would on a new pull request. It would determine how many lines of code changes you have.
                    And if there's like say a threshold that you set say over 500 lines of code, it will bump like your
                    comments saying like, hey,</p>

                <p>recommend</p>

                <p>checking out this it looks like a significant change we recommend changing the documentation make
                    sure it's up to date and then you can but you can work with that github action in like inside there
                    you can say hey if there isn't a change in slash docs or something post post this comment and so
                    I've been looking at possibly doing something like that</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=43m55s"
                        data-turbo="false" title="Jump to 43:55 in this episode">43:55</a>)
                    <br>Hmm.
                </p>

                <p>Mm-hmm.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=44m8s"
                        data-turbo="false" title="Jump to 44:08 in this episode">44:08</a>)
                    <br>just to kind of nudge
                </p>

                <p>my hold myself accountable. And then obviously if there's changes, but obviously like a composer lock
                    file does have more than 500 lines of code changes usually. there's gonna be times where it is kind
                    of annoying. So I think it's just how you have to word it. But I think someone coming at the new
                    feature, it's so easy to get so.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=44m24s"
                        data-turbo="false" title="Jump to 44:24 in this episode">44:24</a>)
                    <br>Hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=44m28s"
                        data-turbo="false" title="Jump to 44:28 in this episode">44:28</a>)
                    <br>Ingraded to the future of like, guys, let's write some documentation on this like nobody nobody
                    says that, know You really have to you have to be purposeful about it it kind of nudges the
                    developers not right way and I think it's live wire
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=44m38s"
                        data-turbo="false" title="Jump to 44:38 in this episode">44:38</a>)
                    <br>Hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=44m41s"
                        data-turbo="false" title="Jump to 44:41 in this episode">44:41</a>)
                    <br>I'm pretty sure Filament does this, but Filament does, they have their docs in their code base
                    of the actual framework or the package. And so if you make a change in Filament, you also just
                    include, you have to include the documentation. It's one of their items that they want you to do,
                    like in their PR checklist. That's another way you could go is in your PR checklist. But just now,
                    did you update documentation? But it just kind of forces people to really take that to, we hold our
                    code
                </p>

                <p>accountable and all those files in there accountable. can really, if we have that docs folder in
                    there, it's so easy to forget about that GitHub page on there.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=45m21s"
                        data-turbo="false" title="Jump to 45:21 in this episode">45:21</a>)
                    <br>Hmm. I almost, I almost think if you could take a step forward since the rise of AI, if you just
                    make a PR that doesn't have docs, if AI will just read your changes and make a doc file for you. You
                    know what I mean? Cause it does that. All right, well, hey, Andy, cut this out. Don't publish this
                    part. But like, you know, I use, I use GitHub Copilot a lot for just writing like tests, like the
                    base.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=45m32s"
                        data-turbo="false" title="Jump to 45:32 in this episode">45:32</a>)
                    <br>Mmm.
                </p>

                <p>Sass idea, yeah. There's a sass idea right there. Yeah.</p>

                <p>Yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=45m51s"
                        data-turbo="false" title="Jump to 45:51 in this episode">45:51</a>)
                    <br>I've got a file open, hey, can you just sort of generate me the first round of tests and then
                    I'll go in and I'll modify. So if you've got something that's like a GitHub action that says, hey,
                    you've got a new feature, no pushes to the docs file, probably should do that or hey, click this
                    button, we'll generate one based on your changes of this PR and publish that for you. Since most
                    actions now you can have auto, lint or pint or whatever.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=46m19s"
                        data-turbo="false" title="Jump to 46:19 in this episode">46:19</a>)
                    <br>Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=46m19s"
                        data-turbo="false" title="Jump to 46:19 in this episode">46:19</a>)
                    <br>And just commit those changes back to the repo as it is. You just have that at the end of
                    whatever push to a PR that goes to, know, your main branch or whatever, just say, regenerate the
                    docs almost like a set package that API one swagger. Is that how swagger does it with the doc
                    blocks? Something like that. So I'm, I'm on board to hell with the Wiki. 2025 is the year we, end
                    the Wiki. There's no reason that a repo should have a repo.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=46m34s"
                        data-turbo="false" title="Jump to 46:34 in this episode">46:34</a>)
                    <br>yeah, yep, the swagger generation. Yep. Mm-hmm. Yep. Yep.
                </p>

                <p>Yes.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=46m49s"
                        data-turbo="false" title="Jump to 46:49 in this episode">46:49</a>)
                    <br>just for docs, just use the repo. Hot take.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=46m51s"
                        data-turbo="false" title="Jump to 46:51 in this episode">46:51</a>)
                    <br>Yeah, yeah, because
                </p>

                <p>yeah, I mean it keeps it up to date and</p>

                <p>helps the team. I went on a new project and I saw a slash docs on the route. That was the first place
                    I went. I saw the readme first, I kind glanced at it, but then I went to the docs and like, that
                    just lets you know it's a good project. They keep it real in their area, like keeping the
                    documentation going. So it's not on an outdated version of what's that documentation markdown.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=47m13s"
                        data-turbo="false" title="Jump to 47:13 in this episode">47:13</a>)
                    <br>you
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=47m23s"
                        data-turbo="false" title="Jump to 47:23 in this episode">47:23</a>)
                    <br>open source thing everyone likes to.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=47m25s"
                        data-turbo="false" title="Jump to 47:25 in this episode">47:25</a>)
                    <br>Yeah. I don't know what to...
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=47m25s"
                        data-turbo="false" title="Jump to 47:25 in this episode">47:25</a>)
                    <br>to use, you know what talking about? It's like a view thing. Viewpress,
                </p>

                <p>yeah, something like that. But it's not like this is just abandoned viewpress or whatever it is that
                    you abandoned and people forget about it. People like writing code in there, or people like writing
                    documentation in their code editor, at least I do, maybe I'm weird. yeah, and so I feel like that's
                    also a thing that helps is you don't have to go through the GitHub editor, which the GitHub editor
                    is cool, but it just kind of, you can do it.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=47m44s"
                        data-turbo="false" title="Jump to 47:44 in this episode">47:44</a>)
                    <br>I do, yeah.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=47m55s"
                        data-turbo="false" title="Jump to 47:55 in this episode">47:55</a>)
                    <br>as you're developing. So, makes sense.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=47m58s"
                        data-turbo="false" title="Jump to 47:58 in this episode">47:58</a>)
                    <br>Hmm. Yeah. I agree with, I don't know if that's your hot take, but I don't think it's that hot.
                    I agree.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=48m2s"
                        data-turbo="false" title="Jump to 48:02 in this episode">48:02</a>)
                    <br>Yeah.
                </p>

                <p>Well, here's here's a</p>

                <p>well, I mean, this isn't really a hot take, but I think Laravel should also take a proactive step at
                    this to an extent, but to their documentation. their documentation is so diverse, like the PEN
                    documentation and stuff. So it'd be kind of a pretty granular change. But I think that they should
                    include the documentation in the framework. And so when somebody comes in with the change, they
                    already have the docs because I spend that that's actually where a majority of my PRs come from.
                    Like I see it like I'll go through Laravel news and I'll</p>

                <p>see</p>

                <p>this really cool update and I'll like, okay, I want to see the docs on this to, you know, how do I
                    use this thoroughly and have a good understanding of it. And I looked at it, it's not documented
                    yet. so then occasionally I'll see a comment from Taylor asking the guy to document it. And it was
                    like two months to go and never got back to Taylor. So then I'll go through and I'll go into the
                    hood, see how it works and then contribute some documentation. That's how a majority of my PRs come
                    from is stuff like that.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=48m59s"
                        data-turbo="false" title="Jump to 48:59 in this episode">48:59</a>)
                    <br>Yeah.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=49m3s"
                        data-turbo="false" title="Jump to 49:03 in this episode">49:03</a>)
                    <br>And so it'd be kind of cool for them to kind of enforce a rule like, you want to PR to Laravel,
                    also include the documentation. It doesn't have to be perfect, but just give us something. But I
                    mean, it kind of goes with Taylor's rules of what he wants in and not into his documentation, but it
                    just, doesn't allow anything to be left behind. It's in sync with and parallel with one another. So,
                    okay, interesting.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=49m26s"
                        data-turbo="false" title="Jump to 49:26 in this episode">49:26</a>)
                    <br>Yeah, I think that would actually
                </p>

                <p>be really nice because I think it was recently or within the last couple of years, they released that
                    artisan command where you can type in collections and it'll open up the collections doc in your
                    browser. How cool would that be if it just opened up in your IDE? You know what mean? Since the MD
                    file's already there, wouldn't it be cool just to open in your IDE right then and there?</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=49m40s"
                        data-turbo="false" title="Jump to 49:40 in this episode">49:40</a>)
                    <br>Mm, yeah.
                </p>

                <p>Yeah, yeah, like, yeah, cause it would pull in the docks. Yeah. Yeah. Yeah.</p>

                <p>I rarely ever go to the actual layer of a documentation anymore. I pull up my docs repo and I find
                    stuff so much faster. Maybe it's just my search on there, but I feel like I have this method. My use
                    case was that I was trying to figure out when to use without Vite or when I like, because sometimes
                    I get some projects where I don't have to include it. And sometimes it forces you to include it. You
                    run your test. It's like you get that whole Vite is not compiled or whatever.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=50m20s"
                        data-turbo="false" title="Jump to 50:20 in this episode">50:20</a>)
                    <br>Manifest
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=50m21s"
                        data-turbo="false" title="Jump to 50:21 in this episode">50:21</a>)
                    <br>right yeah
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=50m21s"
                        data-turbo="false" title="Jump to 50:21 in this episode">50:21</a>)
                    <br>not there. Yeah.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=50m23s"
                        data-turbo="false" title="Jump to 50:23 in this episode">50:23</a>)
                    <br>yeah so then I'm like I feel like I just just should work I like why did projects sometimes I
                    have to include it why do I not and I go to search it on the docs nothing and so but then I if I
                    pull up on my like repo and I type it in there you can reference it because I think it's just how it
                    indexes the results so if you type in a method you have to go to the V doc scroll down and versus me
                    if I open my editor it's right there so yeah
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=50m40s"
                        data-turbo="false" title="Jump to 50:40 in this episode">50:40</a>)
                    <br>Hmm.
                </p>

                <p>Hmm, hmm hmm hmm.</p>

                <p>That's</p>

                <p>interesting. I've, I've, I've, I've got a bookmark that goes to the, I think it's the Laravel nine
                    documentation for string helpers because in the new docs, they don't have like a list of all the
                    available things that the string helper class can do now.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=51m5s"
                        data-turbo="false" title="Jump to 51:05 in this episode">51:05</a>)
                    <br>they really, didn't realize that. They roofed it.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=51m6s"
                        data-turbo="false" title="Jump to 51:06 in this episode">51:06</a>)
                    <br>Yeah, yeah. So I always
                </p>

                <p>go back. So I've got the bookmark to nine that has all of the, you know, the available methods or
                    whatever, because if I try to search, you know, Laravel string helpers, it'll take me to the newest
                    version of the docs, which is correct, but I prefer the version nine version of the docs. So I've
                    always got those bookmark and ironically that's it's either that page or the collections page or the
                    two pages of the docs that I go to nonstop.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=51m34s"
                        data-turbo="false" title="Jump to 51:34 in this episode">51:34</a>)
                    <br>You know like Google They have this thing at least on I type in Laravel validation rules Google
                    says you visit this page frequently like above the It's like okay. You call me out
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=51m43s"
                        data-turbo="false" title="Jump to 51:43 in this episode">51:43</a>)
                    <br>Hahaha
                </p>

                <p>Listen, there's some</p>

                <p>things you can't commit. You can't commit everything to memory. And I'll admit that I can't remember
                    hardly any other collection string helper methods if I don't look them up.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=51m59s"
                        data-turbo="false" title="Jump to 51:59 in this episode">51:59</a>)
                    <br>Yeah, for sure.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=52m3s"
                        data-turbo="false" title="Jump to 52:03 in this episode">52:03</a>)
                    <br>I can't, I can't fit it in my brain.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=52m3s"
                        data-turbo="false" title="Jump to 52:03 in this episode">52:03</a>)
                    <br>Alright, man.
                </p>

                <p>Alright, it's been a good show. You have anything else today?</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=52m14s"
                        data-turbo="false" title="Jump to 52:14 in this episode">52:14</a>)
                    <br>think that was it for me. want to make sure that everybody knows that they had a happy new year
                    and that 2025 is going to be your year. Be passionate. Light that fire. Yeah.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=52m25s"
                        data-turbo="false" title="Jump to 52:25 in this episode">52:25</a>)
                    <br>Yes, try hard. Yes.
                </p>

                <p>As Aaron says have have one kid or have four kids. Yeah, just have fun be on podcasts Do things like
                    this makes just like you know, if if you're still listening this makes me totally uncomfortable I'm
                    sure Dalton you can say do the same and it forces me outside of my comfortability and also just it's
                    fun to just chat what we're passionate about even in a public space so Doing work publicly is
                    something I'm trying to do more of and I know you're trying to do that as well So yeah, it's a it's
                    just getting out there</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=52m34s"
                        data-turbo="false" title="Jump to 52:34 in this episode">52:34</a>)
                    <br>Oof.
                </p>

                <p>Uh-huh. Agreed.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=52m59s"
                        data-turbo="false" title="Jump to 52:59 in this episode">52:59</a>)
                    <br>and contributing back to the community and being a part of it. so that's that's really how you I
                    feel like for me, it's I've grown more than I ever have before. So, yeah, I highly recommend that if
                    you're looking for something in twenty twenty five, there you go. Just get your work out there.
                    Start a podcast. Come on our podcast. We'd love to talk. If you love Laravel, we want to if you know
                    how to use mockery, we're here. We want to we want to know. So. All right. All right, man, it's been
                    good. You can close this out.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=53m15s"
                        data-turbo="false" title="Jump to 53:15 in this episode">53:15</a>)
                    <br>Yeah. Hey!
                </p>

                <p>Please! Come on!</p>

                <p>Yeah, again, like Annie said, if you've made it this far, thank you. Extra special thank you to you.
                    We appreciate you. And we hope to see you whenever the next episode comes out in the next few weeks,
                    next month. All right. Bye guys.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/using-filament-on-the-frontend-mockery-and-documentation-patterns/transcript#t=53m39s"
                        data-turbo="false" title="Jump to 53:39 in this episode">53:39</a>)
                    <br>next month.
                </p>

                <p>See ya.</p>

            </div>
        </div>
</x-app>
