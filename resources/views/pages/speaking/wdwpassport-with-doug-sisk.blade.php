<x-app>
    <x-slot name="seo">
        <title>WDW Passport with Doug Sisk</title>
        <meta name="description"
            content="This week, we’re excited to welcome Doug Sisk, the creator of WDW Passport, a Laravel-powered application designed to help users plan their Disney World trips.">
        <meta property="og:title" content="Building for Clients or Ourselves? Sticky & Static">
        <meta property="og:description"
            content="This week, we’re excited to welcome Doug Sisk, the creator of WDW Passport, a Laravel-powered application designed to help users plan their Disney World trips.">
    </x-slot>

    <p class="text-white/75 text-center text-sm py-2 font-sans">October 8, 2024</p>
    <h1 class="text-3xl md:text-5xl font-bold text-white text-center font-sans">
        WDW Passport with Doug Sisk
    </h1>

    <div class="max-w-3xl mx-auto mt-8">
        <div class="px-4 pb-10">
            <iframe width="100%" height="180" frameborder="no" scrolling="no" seamless=""
                src="https://share.transistor.fm/e/fcf27bc5?color=1F2937&background=101827"></iframe>
        </div>

        <div class="px-4 prose prose-lg dark:prose-invert">
            <div>This week, we’re excited to welcome Doug Sisk, the creator of WDW Passport, a Laravel-powered
                application designed to help users plan their Disney World trips. Doug shares his journey from
                developing the app to 'scratch his own itch' and turning it into a successful tool for Disney
                enthusiasts. We dive into the technical side of things, discussing the use of Laravel and Livewire,
                tackling API integration challenges, and the transition into Websockets.
            </div>
        </div>

        <div class="px-4 mt-8">
            <iframe class="w-full h-96" src="https://www.youtube.com/embed/iebDaqowCSw?si=NXchsI80UDk5CcsS"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <h2 class="text-2xl font-bold text-white text-center mt-12">Transcript</h2>

        <div class="px-4 prose prose-sm dark:prose-invert">
            <div class="site-content-text site-episode-show-notes">

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=0m1s"
                        data-turbo="false" title="Jump to 00:01 in this episode">00:01</a>)
                    <br>Welcome to another episode of The Midwest Artisan where we dive into all things Laravel web
                    development. I'm your host, Andy Hinkle.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=0m9s"
                        data-turbo="false" title="Jump to 00:09 in this episode">00:09</a>)
                    <br>And I'm your cohost, Dalton McCleary.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=0m11s"
                        data-turbo="false" title="Jump to 00:11 in this episode">00:11</a>)
                    <br>Joining me today is a special guest Doug Sisk. So Doug is the creator and maintainer of WDW
                    Passport. It's a Laravel application designed your Disney World trip, which you can check out at
                    wdwpassport.com. So Doug, welcome to the show. For those that may not know you, would you like to
                    introduce yourself?
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=0m30s"
                        data-turbo="false" title="Jump to 00:30 in this episode">00:30</a>)
                    <br>Yeah. so I'm Doug Sisk. I live in Orlando, Florida. I work remotely for, as a lead developer for
                    a fused, fuse agency.com. We're based out of Sioux Falls, South Dakota. That's where I grew up, but
                    now I've kind of bounced around moving. I was in Denver for a bit and now I've been in Orlando for
                    three years, but yeah, I do. So during the day it's my mainly, e-commerce, Laravel apps. we have
                    some, some older WordPress sites and stuff like that, but we've kind of been.
                </p>

                <p>focusing rebuilding and focusing on just focusing on just a couple of clients and yeah, and passports
                    kind of where my playground for new Laravel features and whatnot and it was just kind of a fun thing
                    and then in the last like couple years or so it's turned into an extra couple hundred bucks a month.
                    So nice to have</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=1m18s"
                        data-turbo="false" title="Jump to 01:18 in this episode">01:18</a>)
                    <br>Yeah, yeah, that's incredible. Yeah, so I actually came across WDW Passport, like your site,
                    years ago when I was planning it for a Disney trip. And I've been using it like ever since. So right
                    before our trips, rather than if it's like a few weeks or a few days out, I'll hop on and use like
                    this crowd, they have a tool in there, it's called a Crowd Levels widget or something like that. And
                    so,
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=1m21s"
                        data-turbo="false" title="Jump to 01:21 in this episode">01:21</a>)
                    <br>Nice.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=1m42s"
                        data-turbo="false" title="Jump to 01:42 in this episode">01:42</a>)
                    <br>Yeah.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=1m43s"
                        data-turbo="false" title="Jump to 01:43 in this episode">01:43</a>)
                    <br>It compares like crowd levels to historical or average values. It gives you a score from one to
                    10. And since, yeah.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=1m50s"
                        data-turbo="false" title="Jump to 01:50 in this episode">01:50</a>)
                    <br>Yeah, it's very similar to based on, it's mainly based off of what touring plans, they're kind
                    of like the de facto, like they're the ones that actually do predictions and touring plans is
                    they're pretty good at their predictions because they don't just based off of like wait times and
                    stuff like that. They use like school calendars and all of that, all these little factors that go
                    into how crowded Disney gets.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=2m17s"
                        data-turbo="false" title="Jump to 02:17 in this episode">02:17</a>)
                    <br>Hmm, yeah.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=2m19s"
                        data-turbo="false" title="Jump to 02:19 in this episode">02:19</a>)
                    <br>And I, you know, I just didn't really see a need to compete with that, you know? And I think
                    it's more, I think it's, I have better value, see better value in it. It's like showing what it was
                    in the past and try to do predictions because I don't have a computer science degree. I don't know
                    how to do algorithms and stuff like that. I dabbled in it probably four or five years ago and I just
                    couldn't make it work. And I mean, this is way before like AI was a
                </p>

                <p>huge things. I don't, I don't even know if it, you know, now these days it's, if it's a little bit
                    easier to do, it's just something that I've just kind of just been like, eh, it's, it's not worth it
                    because most people like I'm number one on Google from people when you search Disney wait times.
                    That's, and like, I actually just upgraded my, I have a self hosted analytics service, but I wasn't
                    using the location database, which I finally upgraded and downloaded.</p>

                <p>about a week or so ago and it's like something ridiculous like 80 % of the traffic is here from
                    Orlando. So I think it's legitimately people in the parks or the hotel rooms or whatever, Googling
                    like Disney wait times. the usually that I don't think I'm not sure if the Disney app appears even
                    in Google, but yeah, I'm number one on the, the non like app lists.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=3m21s"
                        data-turbo="false" title="Jump to 03:21 in this episode">03:21</a>)
                    <br>Ha. Locals. Yeah.
                </p>

                <p>Yeah.</p>

                <p>killer SEO term out there, yeah. People come.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=3m38s"
                        data-turbo="false" title="Jump to 03:38 in this episode">03:38</a>)
                    <br>huh.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=3m38s"
                        data-turbo="false" title="Jump to 03:38 in this episode">03:38</a>)
                    <br>Yeah, no, it's taken me a while to get there. Like back in the day, like when I first launched
                    the site, I was, you know, I only had like a couple hundred people a month and you know, for a while
                    it was, you know, it would never, up until a couple of years ago, it really was not a money-making
                    thing. And then the last couple of years it's, you know, with advertisements and then I have the,
                    the dining alerts that I usually pay for that. only charge five bucks a month and that covers the
                </p>

                <p>hosting costs for that because that's a little bit intensive especially now because Disney's gotten a
                    little bit better about bot detection so I've had to up my game with that.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=4m14s"
                        data-turbo="false" title="Jump to 04:14 in this episode">04:14</a>)
                    <br>mm-hmm. Yeah. so the crowd levels was kind of a really unique thing. It's primarily what I love
                    to use. And so we have annual passes and we have a year and a half year old. So it's been a great
                    tool for us as a family strategically planning our trip. And so we can adjust our plans based on
                    what we see. Like if one of the parks say Magic Kingdom.
                </p>

                <p>For example, it's looking very busy. We might pivot and go to animal kingdom instead. We might see
                    it. The crowd has been looking a little bit lighter there in recent days.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=4m46s"
                        data-turbo="false" title="Jump to 04:46 in this episode">04:46</a>)
                    <br>Yeah, the the life crowd thing I I can't even remember when I pushed it. I think it was like a
                    year or so ago and it was just something it was just a shower thought I had one day and then built
                    up built as kind of a separate scale because obviously you have to build a separate scale off of
                    that. There's a there's they have the daily average scale and then you have to build a separate
                    scale for each hour of the day for that because you know in the morning.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=4m53s"
                        data-turbo="false" title="Jump to 04:53 in this episode">04:53</a>)
                    <br>Yeah.
                </p>

                <p>You</p>

                <p>Mm-hmm.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=5m15s"
                        data-turbo="false" title="Jump to 05:15 in this episode">05:15</a>)
                    <br>rides probably going to have a super long wait time and as the day goes on it fluctuates you
                    know because the bigger more popular rides they're really busy right away in the morning and then
                    they kind of taper off and then they get busier again in the afternoon as people start to show up
                    more people start to show up so
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=5m21s"
                        data-turbo="false" title="Jump to 05:21 in this episode">05:21</a>)
                    <br>Yeah.
                </p>

                <p>Locals. Yeah. Yeah, for sure. Yeah. And so, like when a couple of weeks ago, I was, I was looking at
                    like crowdsizes for upcoming trip. I went to your site and I just had that moment of realization of
                    like how much like, I like use the site. And I was just like, wonder who, which companies behind the
                    site actually thought like wonder like company wise who would be behind it. And so I clicked the
                    about page and there is your picture. I thought, wait a minute, I know this guy. And I was like,
                    then I realized I talked to you at Laracon and it blew my mind.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=5m55s"
                        data-turbo="false" title="Jump to 05:55 in this episode">05:55</a>)
                    <br>haha
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=6m1s"
                        data-turbo="false" title="Jump to 06:01 in this episode">06:01</a>)
                    <br>I'm sitting on the couch and I'm sitting on the couch with my wife and like, no way. And my wife
                    is like, is everything okay? Are the other crowd levels going to be high? I'm like, and it's in
                    Laravel And so, but for me, it was like one of those small world moments. I just didn't expect.
                    like, I this guy at Laracon and, you know, we've been talking and yeah. Yeah.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=6m2s"
                        data-turbo="false" title="Jump to 06:02 in this episode">06:02</a>)
                    <br>Yeah.
                </p>

                <p>Yeah</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=6m12s"
                        data-turbo="false" title="Jump to 06:12 in this episode">06:12</a>)
                    <br>You
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=6m18s"
                        data-turbo="false" title="Jump to 06:18 in this episode">06:18</a>)
                    <br>Yeah, no, don't. Yeah, when I'm at Lercon, I really don't talk about it. I talk about more about
                    my actual like business side. You know, I don't really want to go to that too much on that since
                    we're talking about, you know, WDW passport and I don't know, don't have much clearance to talk
                    about, you know, our main client like in public online.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=6m25s"
                        data-turbo="false" title="Jump to 06:25 in this episode">06:25</a>)
                    <br>Right,
                </p>

                <p>Yeah.</p>

                <p>Right, yeah, for sure. Yeah, yeah, Laracon , you never know who you might run into. It's just like,
                    yeah, you don't run into anyone and they would tell you that information. It's kind of, you know,
                    it's kind of find out the other fact or through other means. But it's just it's so neat of what
                    you've built with WD passport over the years. And I'd love to at least start off with the origin of
                    like what inspired you to originally create I'd love to see or love to hear like what's the story
                    behind it? What inspired you to?</p>

                <p>create such a helpful tool.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=7m8s"
                        data-turbo="false" title="Jump to 07:08 in this episode">07:08</a>)
                    <br>I honestly, I think it was just out of boredom. Like it was just kind of like, it'd be cool to
                    collect all these wait times and have it myself because really the only company at the time that had
                    all of that stuff saved and publicly available was touring plans. And you had to be subscribed to do
                    that. And back then touring plans definitely
                </p>

                <p>Is like most data driven, developer focused companies there. They have the data. It's really
                    impressive what they've done, but the design is a little lacking. Now they did redesign their
                    website, I think last year and it's a lot better. Unfortunately, a lot of the power features got
                    removed in the redesign, which yeah, it kind of stinks. And that's. I that's kind of what what I
                    mainly did.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=7m56s"
                        data-turbo="false" title="Jump to 07:56 in this episode">07:56</a>)
                    <br>like the good stuff.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=8m4s"
                        data-turbo="false" title="Jump to 08:04 in this episode">08:04</a>)
                    <br>WDW passport for was just for my, for my use, just for my data. Like I, I, at the time I
                    couldn't really find like there weren't a lot of really good third party wait time apps and whatnot.
                    And at that time I was living in Denver. So I was still, I was going down to Disney like once a year
                    there is.
                </p>

                <p>always been an interest for me, you know, it's not like, you know, I feel like that's kind of where,
                    it's nice because I have such a big interest in, in it is that it gives me a place. I kind of
                    mentioned before to test out new Laravel features because, know, during the day, I'm not able to do
                    that at work necessarily because we're having to,</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=8m45s"
                        data-turbo="false" title="Jump to 08:45 in this episode">08:45</a>)
                    <br>Yeah.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=8m51s"
                        data-turbo="false" title="Jump to 08:51 in this episode">08:51</a>)
                    <br>get stuff up to the production and whatnot. And you just don't have a lot of time to mess around
                    with that kind of stuff. The client doesn't care about reverb or whatever. It's the feature we
                    talked about up. So yeah, it just started out like that and it just kind of snowballed over the
                    years. was...
                </p>

                <p>kind of just off in a corner of the internet for a while. And some people found it and posted it in
                    like Reddit way back in the day. then, yeah, in the last couple of years or so with the SEO traffic,
                    it just exploded. And now it's known quite a bit. It's seen, it's, kind of surprised how often like
                    I don't see a lot out, like I don't know about it. Like I think the day I look over and I see
                    somebody, have it open on their phone.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=9m47s"
                        data-turbo="false" title="Jump to 09:47 in this episode">09:47</a>)
                    <br>You
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=9m47s"
                        data-turbo="false" title="Jump to 09:47 in this episode">09:47</a>)
                    <br>in the parks, I'll probably like jump on them and be like, okay, guess what? You just earned
                    yourself a free drink.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=9m51s"
                        data-turbo="false" title="Jump to 09:51 in this episode">09:51</a>)
                    <br>Hey!
                </p>

                <p>Yeah, that's fantastic. So when did when did what was the year that originally started when you
                    started building it?</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=9m54s"
                        data-turbo="false" title="Jump to 09:54 in this episode">09:54</a>)
                    <br>You
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=10m1s"
                        data-turbo="false" title="Jump to 10:01 in this episode">10:01</a>)
                    <br>think it was 2017. I think that's when it was. I have the commit history. have, it's two
                    different versions. 2017, March of 2017 was when I started collecting the wait times. And I
                    actually, I don't collect the wait time. I collect the wait times, but the code that interacts with
                    Disney,
                </p>

                <p>Was not necessarily my code. It's this guy from the UK and it was originally a node library, so it
                    was a node JS script for awhile. then in 2017 it was pretty simple. Just API call point. I probably
                    could have done it PHP if I wanted to, but the library was so well done and.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=10m49s"
                        data-turbo="false" title="Jump to 10:49 in this episode">10:49</a>)
                    <br>Mm-hmm.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=10m50s"
                        data-turbo="false" title="Jump to 10:50 in this episode">10:50</a>)
                    <br>It was pretty easy to set up on a cron script to run a node script every so often. So that was
                    just a simple API call. like the authentication was just like a single API key that everybody in the
                    world shared. Like it wasn't that complex. And then a couple of years later, they started using
                    CouchDB in the app. And so they had to rewrite the library and then
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=11m4s"
                        data-turbo="false" title="Jump to 11:04 in this episode">11:04</a>)
                    <br>error token. yeah, yeah.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=11m18s"
                        data-turbo="false" title="Jump to 11:18 in this episode">11:18</a>)
                    <br>Another couple years after that, they started actually enforcing like individual tokens for each
                    like app. And so he actually moved it off of being a library into a cloud platform. So it's
                    themeparks.wiki now. And that's pretty much what everybody in the industry does. So it's this one
                    app that's in the cloud and everybody's using that API now.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=11m34s"
                        data-turbo="false" title="Jump to 11:34 in this episode">11:34</a>)
                    <br>nice, yeah.
                </p>

                <p>Okay.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=11m47s"
                        data-turbo="false" title="Jump to 11:47 in this episode">11:47</a>)
                    <br>For for and they in it's not just Disney. It's universal Six Flags Sea World like any in the
                    European parks too. Like there's a ton of them. So it and we actually I think I'm not sure if I've
                    heard of anybody else using it yet, but we've started the test out in the last like week or two a
                    web socket. So before I was having the you know, make a manual API call.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=11m52s"
                        data-turbo="false" title="Jump to 11:52 in this episode">11:52</a>)
                    <br>Wow.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=12m14s"
                        data-turbo="false" title="Jump to 12:14 in this episode">12:14</a>)
                    <br>every time to update weights. now we're using, utilizing a web socket from them. So it's really,
                    it's really cool. So basically as soon as he gets, sees that there's been a change, I get notified,
                    I save it to my database, redo all my calculations and stuff like that. It's really, really cool.
                    Like it's, it's opens, it opens the door to a lot. I've toyed with the idea. haven't done anything
                    yet of,
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=12m20s"
                        data-turbo="false" title="Jump to 12:20 in this episode">12:20</a>)
                    <br>Wow.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=12m42s"
                        data-turbo="false" title="Jump to 12:42 in this episode">12:42</a>)
                    <br>looking into doing like notifications and stuff like that because you know, it's so nice now
                    with iOS now supporting pushing notifications in web apps because I'm not an app developer by any
                    mean and I have no drive to learn to be an app developer. It could be fun, but I just, you know, I
                    don't have time for that. I'm a Laravel developer.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=12m44s"
                        data-turbo="false" title="Jump to 12:44 in this episode">12:44</a>)
                    <br>Mm-hmm.
                </p>

                <p>Like, right, PWAs. Mm-hmm. Yeah.</p>

                <p>Yeah, absolutely. Yeah. Yeah. When you, yeah, when you develop, know, full time, you have your full
                    time job, Laravel and then do, your, passion project with WDW passport. And yeah, it could take up a
                    lot of time. There's probably little room to pick up, but like, you could do like probably like a
                    PWA or something or PDA. Yeah, I think, yeah.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=13m24s"
                        data-turbo="false" title="Jump to 13:24 in this episode">13:24</a>)
                    <br>Yeah, yeah, I was thinking I actually just added a week or so ago to the site when you're on the
                    wait times page. It now prompts you to add to your home screen because I've done that for years and
                    I don't think a lot of people have known about it and the way I have. I actually have it set up.
                    It's a it's live wire. The wait times page and so I actually have a figure out a way. There's a
                    little snippet of code that I can text when you.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=13m34s"
                        data-turbo="false" title="Jump to 13:34 in this episode">13:34</a>)
                    <br>Yeah, nice
                </p>

                <p>Yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=13m46s"
                        data-turbo="false" title="Jump to 13:46 in this episode">13:46</a>)
                    <br>Yes.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=13m53s"
                        data-turbo="false" title="Jump to 13:53 in this episode">13:53</a>)
                    <br>switch like tabs or you know reopen the page in the in your phone on your phone and then it
                    triggers the the call to refresh the wait times.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=14m4s"
                        data-turbo="false" title="Jump to 14:04 in this episode">14:04</a>)
                    <br>Hmm, very nice. So you started with, so you started in Node, right? In a JavaScript app. And
                    then did you, always been a Laravel app? Okay, yeah, always been a Laravel app.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=14m11s"
                        data-turbo="false" title="Jump to 14:11 in this episode">14:11</a>)
                    <br>So no, it's always been. It's always been Laravel. It's always been Laravel, but the actual like
                    wait time fetching was this little node script, but it was going to a MySQL database and then the
                    Laravel side was reading the MySQL database and. was a Vue app until a couple of years ago and then
                    I rewrote it into Livewire.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=14m35s"
                        data-turbo="false" title="Jump to 14:35 in this episode">14:35</a>)
                    <br>So is it like a tall stack? Yeah, so looking at your website looks like a tall stack with
                    Telwin. Is it Telwin that you have? Telwin? Yeah, so it's Telwin, Alpine, Livewire, and Laravel. So
                    fantastic.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=14m39s"
                        data-turbo="false" title="Jump to 14:39 in this episode">14:39</a>)
                    <br>Mm-hmm.
                </p>

                <p>Yeah, yeah, yeah.</p>

                <p>Yeah, and it's definitely I've my design skill has definitely changed over, know, I'm like in any
                    other Laravel developer from the last like five years, the refactoring UI was a game changer for me
                    and it really helped me with my design skills. And that's kind of one of the other things I really
                    always wanted to focus WDW passports, kind of mantra was not necessarily being the most power.</p>

                <p>You know, there's another website out there called thrill data. and they have by far way, they have
                    way more charts, way more data than me. But if you go on there, it's, it's admittedly a bit of a
                    mess. And, I, I've always been very focused on having it. being better designed, being very clean
                    and easy to use and understand, you know, kind of taking that Apple approach.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=15m43s"
                        data-turbo="false" title="Jump to 15:43 in this episode">15:43</a>)
                    <br>Yeah, absolutely. Yeah, when that
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=15m44s"
                        data-turbo="false" title="Jump to 15:44 in this episode">15:44</a>)
                    <br>You know, you know, I could I could do more power stuff, but I kind of like having it be a
                    little bit cleaner.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=15m52s"
                        data-turbo="false" title="Jump to 15:52 in this episode">15:52</a>)
                    <br>Yeah, yeah, definitely. cause I've seen some of these other sites and like to your point of what
                    you said, they're not, they're not well done. They have kind of different points, different ways.
                    And some of these, don't even understand what they're like some park lingo or abbreviations and you
                    just have it very clean, very elegant. Here's a chart. Here's the ride. Here's the current wait
                    time. And, then you have.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=16m11s"
                        data-turbo="false" title="Jump to 16:11 in this episode">16:11</a>)
                    <br>Yeah, I try. I try to avoid. I try to avoid the abbreviations too much. use I do that on mobile
                    on the tabs like at the top to switch between the parks, but that's pretty straightforward. But
                    other than that, I try to not do. Too much lingo and then they have that little button that you can
                    click and then it pulls up the overlay and it tells you what every all those little icons mean. I
                    think there's the one thing I don't have. Described is that.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=16m22s"
                        data-turbo="false" title="Jump to 16:22 in this episode">16:22</a>)
                    <br>Yeah.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=16m40s"
                        data-turbo="false" title="Jump to 16:40 in this episode">16:40</a>)
                    <br>I kind of detect the lightning lane refills because well, if for anybody that's not been the
                    Disney recently, they renamed fast pass to lightning lane a couple years ago it's very similar to
                    the old to the fast pass plus system that was there before 2020 and Disney will refill certain rides
                    as the day goes on and.
                </p>

                <p>use like an average over the last like five days or so to kind of determine whether or not there
                    might be a refill time and I show that on certain rides. So I need to probably add that to the
                    prompt because there's a little thing that pops up from time to time that says L refill and I'm sure
                    that people are like, what?</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=17m24s"
                        data-turbo="false" title="Jump to 17:24 in this episode">17:24</a>)
                    <br>What? Yeah, for sure.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=17m27s"
                        data-turbo="false" title="Jump to 17:27 in this episode">17:27</a>)
                    <br>Well admittedly Doug, I'm I am NOT a Disney person I don't go to Disney so I this is the first
                    time I've seen your app and I The big thing that I'm the most curious about is you said it was in
                    Vue before and then you switch to livewire What was your what was like your biggest deciding factor
                    to do that switch? Like what was it about livewire specifically that? Like maybe there's a
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=17m50s"
                        data-turbo="false" title="Jump to 17:50 in this episode">17:50</a>)
                    <br>I think, you know, it's kind of what I mentioned. It's it's this is my playground for, for, new
                    features and whatnot. And I, when I saw live wire a couple of years ago, I got, I was really
                    intrigued by it because I prefer to write and blade and PHP because it's just more powerful. It's
                    just more powerful to have. It's not that I'm writing spaghetti code and putting like a bunch of PHP
                    functions and all that into my blade templates. It's just that there's, there are so many.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=18m8s"
                        data-turbo="false" title="Jump to 18:08 in this episode">18:08</a>)
                    <br>Agreed.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=18m20s"
                        data-turbo="false" title="Jump to 18:20 in this episode">18:20</a>)
                    <br>there's just so much more functions and like structures and stuff like that available in PHP
                    than Vue And really when you do a Vue app, you're having the duplicate the code twice because you're
                    writing the API endpoint and then you're having the right the view, you know, and both the way WD
                    password works and the way we work at fuse. We're a small team where only there's only three
                    developers on our team, so it's not like, you know, I understand with.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=18m33s"
                        data-turbo="false" title="Jump to 18:33 in this episode">18:33</a>)
                    <br>Amen.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=18m50s"
                        data-turbo="false" title="Jump to 18:50 in this episode">18:50</a>)
                    <br>A much larger organization where you actually have a split front end and back team where view in
                    JavaScript makes sense. But for a small team like ours and or just like a personal project like like
                    WDW Passport, it just made more sense to try out Livewire and I've it's turned out great. I mean,
                    three three was nine day like it's not to say two was bad. It's just three is.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=19m15s"
                        data-turbo="false" title="Jump to 19:15 in this episode">19:15</a>)
                    <br>Agreed.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=19m19s"
                        data-turbo="false" title="Jump to 19:19 in this episode">19:19</a>)
                    <br>There's been so many improvements. where, you know, I'm writing a, a massive e-commerce app
                    right now from scratch, both front end and back end and live wire. And it's just mind blowing. you
                    know, we're obviously in the testing environment. So it's only like, you know, 10 orders in the
                    database and not like, well, you know, what it'll be in production, which is like a million and half
                    orders.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=19m35s"
                        data-turbo="false" title="Jump to 19:35 in this episode">19:35</a>)
                    <br>Yes.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=19m44s"
                        data-turbo="false" title="Jump to 19:44 in this episode">19:44</a>)
                    <br>I work faster because the problem with you is you have to like sometimes download packages and
                    stuff and the bloat, you know, and I understand some people get wary with live wire because you're
                    actually having to make those requests, you know, back to the Laravel app and you know, it's
                    re-rendering and stuff like that. And that is a little tricky at first. I've had some issues with
                    that, especially with WDW
                </p>

                <p>WDW Passport's wait times because I'm having to. That's a I think it's like 22 million wait times
                    now, so you know. Yeah, yeah. Yeah, so that that that's. That's obviously a performance thing. I
                    have to, you know, be careful for my my SQL query, so I do actually do all of that on the in a.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=20m23s"
                        data-turbo="false" title="Jump to 20:23 in this episode">20:23</a>)
                    <br>I'm sorry, what?
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=20m24s"
                        data-turbo="false" title="Jump to 20:24 in this episode">20:24</a>)
                    <br>Yeah.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=20m37s"
                        data-turbo="false" title="Jump to 20:37 in this episode">20:37</a>)
                    <br>on the queue now and when you so when you hit the wait times page it's actually loading from a
                    cache. you're not hitting the database life because what when you do go to the the the pass crowds
                    page and go to an individual day and view the wait times that's why it takes spends a little bit
                    it's because it's having to load all that but it thankfully is also cachhe so once you refresh the
                    page you'll notice that it's instantly.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=20m44s"
                        data-turbo="false" title="Jump to 20:44 in this episode">20:44</a>)
                    <br>time.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=21m2s"
                        data-turbo="false" title="Jump to 21:02 in this episode">21:02</a>)
                    <br>Yeah, yeah. So I'm curious too then if you're using LiveWire, are you stuff like poll? Are you
                    polling? Are you doing some like weird...
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=21m10s"
                        data-turbo="false" title="Jump to 21:10 in this episode">21:10</a>)
                    <br>Yeah, yeah, I do. I don't think I use the built-in polling. I think I do. I have a custom
                    polling because I watch whether or not you're on the background. I want to 3Now is smart enough to
                    know whether or not the page is open and won't poll in the background.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=21m16s"
                        data-turbo="false" title="Jump to 21:16 in this episode">21:16</a>)
                    <br>Okay.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=21m34s"
                        data-turbo="false" title="Jump to 21:34 in this episode">21:34</a>)
                    <br>But it's like I mentioned before where I had, built this, I figured out a way to detect when you
                    change between tabs or reload the page or when you're on your phone and you switch between apps and
                    you reload the app because a lot of times the Safari with iOS, like it just saves the state. So when
                    you re-go back in, if you don't have a hook like that,
                </p>

                <p>it won't necessarily refresh and especially with a timeout polling and all that. So that way when you
                    go back into the page, it immediately gets the newest data.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=22m2s"
                        data-turbo="false" title="Jump to 22:02 in this episode">22:02</a>)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=22m12s"
                        data-turbo="false" title="Jump to 22:12 in this episode">22:12</a>)
                    <br>so Cliff.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=22m12s"
                        data-turbo="false" title="Jump to 22:12 in this episode">22:12</a>)
                    <br>Yeah, I know with working with Dalton I think we both have ran into this a few times with like
                    LiveWire and polling. We'll launch an app and be really excited about it. Then we'll hear this, like
                    we'll get a screenshot and it's like a session expired if you like, leave your screen on for a
                    while, then come back, you know, you'll get that. And so, yeah, then we have to realize, yeah, we
                    need a like.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=22m30s"
                        data-turbo="false" title="Jump to 22:30 in this episode">22:30</a>)
                    <br>India.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=22m34s"
                        data-turbo="false" title="Jump to 22:34 in this episode">22:34</a>)
                    <br>refresh it, you know, if they come back or if they come back to that window and it's, yeah, so.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=22m39s"
                        data-turbo="false" title="Jump to 22:39 in this episode">22:39</a>)
                    <br>I think it's gotten a little better on three. I don't think three has as many, I've noticed as
                    many issues on three with that.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=22m41s"
                        data-turbo="false" title="Jump to 22:41 in this episode">22:41</a>)
                    <br>Mm-hmm.
                </p>

                <p>Mm-hmm, yeah. There has been robust, yeah. Yeah. Do you talk to Caleb? Caleb Porzio very often? Have
                    you had any interactions with him?</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=22m56s"
                        data-turbo="false" title="Jump to 22:56 in this episode">22:56</a>)
                    <br>No, no. I man, I had to hunt him down. Like at Laracon this year, like I didn't see him until
                    until day two. Like, I was like walking around all day one. was like, where's Caleb?
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=23m7s"
                        data-turbo="false" title="Jump to 23:07 in this episode">23:07</a>)
                    <br>Yeah, so Caleb his wife is a Disney planner and The reason I bring this up is he's like a big
                    Disney guy So was like, I think you would love the fact that you're using livewire with this but
                    he's really big into Disney his wife is a Disney planner and you know, he's from Buffalo and they
                    they come down to Orlando area and they live there for like the first three months of the year and
                    so the work that he's done into a livewire and
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=23m20s"
                        data-turbo="false" title="Jump to 23:20 in this episode">23:20</a>)
                    <br>He heeeey
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=23m35s"
                        data-turbo="false" title="Jump to 23:35 in this episode">23:35</a>)
                    <br>It's been exceptional and version three has been fantastic. but yeah, he's like, yeah.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=23m38s"
                        data-turbo="false" title="Jump to 23:38 in this episode">23:38</a>)
                    <br>Yeah, it's just really cool now with the attributes and stuff like that. I actually just started
                    like yesterday, the e-commerce app I'm working on, I started working on building my own attributes.
                    that's, know, it's just nuts to see where PHP has gone in the last couple of years because yeah,
                    it's a great language to work in and any of the naysayers are just fools.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=23m43s"
                        data-turbo="false" title="Jump to 23:43 in this episode">23:43</a>)
                    <br>Mm-hmm.
                </p>

                <p>So when I was talking with you, said that people do kind of poke fun with you for having PHP. So
                    these other people that you work, like similar products to work with, are they generally kind of a
                    node setup or a Python maybe, I guess with heavy data?</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=24m3s"
                        data-turbo="false" title="Jump to 24:03 in this episode">24:03</a>)
                    <br>Yeah, you tell him, Doug. PHP is not dead. Doug said so.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=24m6s"
                        data-turbo="false" title="Jump to 24:06 in this episode">24:06</a>)
                    <br>Yeah.
                </p>

                <p>Yeah, I think I want to say a lot of a lot of people have been posting mobile apps. A lot of people
                    have been building out mobile apps. So yeah, if you go to the theme parks dot wiki website, there's
                    a link to a discord and now we have a discord and we have several different channels. We got to just
                    a general discussion. Then we got showcase if you have a project, many technical questions. The the
                    actual like back in.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=24m28s"
                        data-turbo="false" title="Jump to 24:28 in this episode">24:28</a>)
                    <br>Mm-hmm.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=24m51s"
                        data-turbo="false" title="Jump to 24:51 in this episode">24:51</a>)
                    <br>API of how it all works is open source so you can go through and see kind of how it works. I
                    think there are some bits and pieces that are behind closed doors like the actual like
                    authentication with Disney and all that. it's it's over my head is not an app developer like if I'm
                    sure if you were an app developer like.
                </p>

                <p>you could you'd go in and be like, yeah, this totally understand this.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=25m19s"
                        data-turbo="false" title="Jump to 25:19 in this episode">25:19</a>)
                    <br>Yeah, so, and you kind of touched on this, but so you, when you reach out to these APIs, when
                    you, when you that use the, what was that service? I'll make sure I get that right. The service with
                    all of the different parks that their wait times.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=25m31s"
                        data-turbo="false" title="Jump to 25:31 in this episode">25:31</a>)
                    <br>It's a theme parks dot wiki.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=25m34s"
                        data-turbo="false" title="Jump to 25:34 in this episode">25:34</a>)
                    <br>theme parks wiki. do you, is that the API that you interact with the most when you're hitting up
                    for the wait times or do you go to Disney directly when you're at Colonies?
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=25m45s"
                        data-turbo="false" title="Jump to 25:45 in this episode">25:45</a>)
                    <br>Yeah, no, I only go through that through that API for the wait times now because there is no way
                    to for me to directly communicate with Disney with unless I authenticate with them and that's kind
                    of a complex process and they've really kind of in the last couple of months tightened down. have a
                    lot more tighter bot detection and stuff like that. I think a lot of that deals with. The Disney
                    Plus password sharing they.
                </p>

                <p>started the crackdown on that a lot, know, in the last couple of months and kind of that's everything
                    else in the Disney company kind of got roped up because Disney uses like a single sign in now for
                    the entire company. Like it's, if you go to the ESPN, it's like the same like login boxes. Yeah,
                    it's pretty cool, but it's definitely kind of made it a pain in the last.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=26m17s"
                        data-turbo="false" title="Jump to 26:17 in this episode">26:17</a>)
                    <br>Mm-hmm.
                </p>

                <p>Wow.</p>

                <p>Same login.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=26m43s"
                        data-turbo="false" title="Jump to 26:43 in this episode">26:43</a>)
                    <br>recently because it used to that it was pretty easy to get into stuff like the back like before
                    2020 they had like, it was pretty accessible to get the, wait times for buses at the resorts. So I
                    had a page back in the day where you could go into the sector resort and see the wait times for, for
                    buses and poof, gone. That's been, think they, I don't even think of that feature works at Disney,
                    like Disney itself anymore. Like I've,
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=27m4s"
                        data-turbo="false" title="Jump to 27:04 in this episode">27:04</a>)
                    <br>that is so nice.
                </p>

                <p>No, yeah.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=27m13s"
                        data-turbo="false" title="Jump to 27:13 in this episode">27:13</a>)
                    <br>I feel like the few times I do take buses from the resorts, they have the TV screens and it just
                    says every 15 minutes, whatever. It's like, was so cool because you could get to the bus stop and it
                    was like, the bus isn't gonna be here for 20 minutes. It's like, cool, then I'm gonna go back inside
                    and send the air conditioning.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=27m19s"
                        data-turbo="false" title="Jump to 27:19 in this episode">27:19</a>)
                    <br>Right? Yeah. Yeah.
                </p>

                <p>Yeah, so Dalton and listeners that don't go to Disney often, they have bus transportation will take
                    you either like buses to the parks. And then also they have a thing called the Skyliner, which is
                    like, it's kind of similar to like a ski lift that will take you, but it's like a cabin. So it's
                    enclosed and they'll take you to the park. So depending on which resort you stay. So traditionally
                    way to get to parks is by bus. And when you're there,</p>

                <p>there's no way to see the wait times for the buses. So if you're going to Magic Kingdom, sometimes
                    the next bus can be up to 20 minutes. And this is in the hot Orlando sun, you're standing out there
                    waiting for this bus. But you don't know how long the wait time is till you get to the front and
                    have the monitor and Doug to your point. Sometimes that is not very accurate, where it just says
                    every 15 minutes and you just have to wait it out.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=28m22s"
                        data-turbo="false" title="Jump to 28:22 in this episode">28:22</a>)
                    <br>Yeah, I don't, think, I think they've just straight up gotten rid of it. I don't think they do
                    it anymore. I, I think I can't think of the last time I was at a resort and it was, it actually had
                    a wait time, like counting down. was just said every 20 minutes or so. it's yeah, it's useless.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=28m38s"
                        data-turbo="false" title="Jump to 28:38 in this episode">28:38</a>)
                    <br>Yeah. One of the things you offer on your site is dining alerts. And that's something that we, I
                    didn't realize until just a couple of weeks ago when I was, when during my discovery of this, was
                    like, well, this is really cool for dining alerts too. So is that something that's done with
                    interacting with the theme parks Wiki? is that the same?
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=28m57s"
                        data-turbo="false" title="Jump to 28:57 in this episode">28:57</a>)
                    <br>No, that's so that's the theme parks wiki guy has considered adding that on, but so far no one I
                    think especially they redid the system about a year or so ago and the new system is. They actually
                    firing finally hired competent developers because it's got bot detections. It's got a waiting room
                    system so used to I was able to run my.
                </p>

                <p>my searches just through a proxy on a Laravel Queue and hit the actual API points. And now I actually
                    am running a full on, I wrote it in Python and with Selenium. So it's running a full browser and
                    it's having to do those requests one by one by one. So I can't do it as frequently as I used to,
                    which is why I kind of only charge five bucks. And I kind of warn people it's just like, it's.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=29m40s"
                        data-turbo="false" title="Jump to 29:40 in this episode">29:40</a>)
                    <br>Wow. Wow.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=29m53s"
                        data-turbo="false" title="Jump to 29:53 in this episode">29:53</a>)
                    <br>semi successful. It's not as successful as the system used to be, but it still does a pretty
                    good job because, you know, of course now because my app got knocked out, everybody in there and
                    their mom had written a dining alert system on the old thing by like last year or so. And it was
                    just while the watch, all those just poof disappear. I think, I think mouse dining and mouse watcher
                    are still going and there's
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=30m10s"
                        data-turbo="false" title="Jump to 30:10 in this episode">30:10</a>)
                    <br>Mm-hmm.
                </p>

                <p>crashing down. Yeah.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=30m22s"
                        data-turbo="false" title="Jump to 30:22 in this episode">30:22</a>)
                    <br>I think another there's an actual like app called stakeout. I think that's still running. But
                    for the most part, know touring plants had one and it's gone and they had zero interest in
                    rebuilding. And I know with me right now, I've kind of hit a point where built out the system and
                    if, but if Disney does any more changes where I have to fight with it, I'm just going to give up
                    because at this point I actually make more
                </p>

                <p>on the majority of my revenue comes from advertisements from Google AdSense than it does through the
                    subscriptions. Not a whole lot of people are doing the dining alerts anymore because honestly the
                    dining availability is just so much better these days. A couple years ago, especially during COVID,
                    it was awful. Yeah, it was awful. Like it was impossible to find tables. But I think, especially
                    now,</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=31m6s"
                        data-turbo="false" title="Jump to 31:06 in this episode">31:06</a>)
                    <br>Yeah, yeah.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=31m17s"
                        data-turbo="false" title="Jump to 31:17 in this episode">31:17</a>)
                    <br>Now that Disney's blocked a lot of those search automated search systems, which I can't even
                    remember what year it was like 2016 2017 somewhere around there were services that were actually
                    automated buying like booking the reservations and That was the first time Disney had ever went went
                    to the developers or like nope and gave him cease and desist letters
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=31m43s"
                        data-turbo="false" title="Jump to 31:43 in this episode">31:43</a>)
                    <br>Wow
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=31m45s"
                        data-turbo="false" title="Jump to 31:45 in this episode">31:45</a>)
                    <br>And that's the last time I've heard of apps getting seasoned to assist from Disney. Nothing
                    related to the wait times, dining alerts, since as long as you don't auto book something, they don't
                    seem to really care too much. Now I know that there's this app called Standby Skipper. They actually
                    reached out to me pre-launch and
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=32m0s"
                        data-turbo="false" title="Jump to 32:00 in this episode">32:00</a>)
                    <br>Mm-hmm.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=32m12s"
                        data-turbo="false" title="Jump to 32:12 in this episode">32:12</a>)
                    <br>They've been around for like a year or two now and I'm kind of surprised that Disney hasn't sent
                    them on cease and desist because I'm pretty sure they auto book lightning lanes so Dalton probably
                    doesn't know but if you have, if you've been to Disney and have the My Disney Experience app, you
                    can send an email invite and invite.
                </p>

                <p>people into your My Disney Experience account. And so that's what the Standby Skipper does, is they
                    have their own My Disney Experience account, then they invite you into that. And because they've
                    been invited in, then they can book. And I think they're utilizing the actual API endpoints, and
                    they figured out the authentication and all of that. it's a really cool thing.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=32m52s"
                        data-turbo="false" title="Jump to 32:52 in this episode">32:52</a>)
                    <br>you
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=32m56s"
                        data-turbo="false" title="Jump to 32:56 in this episode">32:56</a>)
                    <br>Hmm.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=33m5s"
                        data-turbo="false" title="Jump to 33:05 in this episode">33:05</a>)
                    <br>It's something I don't want to dabble in because that's, you know, you're connecting to people's
                    literal Disney accounts. know, when you're on my site, you're just, you know, it's, I'm just
                    searching the site. You know, I'm not connecting to your actual Disney account. And it seems like
                    the people that did Stand By Skipper did their research and got a lawyer involved. Like they're
                    pretty serious about it. Like, which I've got to wonder if.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=33m5s"
                        data-turbo="false" title="Jump to 33:05 in this episode">33:05</a>)
                    <br>wild.
                </p>

                <p>Right.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=33m35s"
                        data-turbo="false" title="Jump to 33:35 in this episode">33:35</a>)
                    <br>If they're ever going to hit the return, they are alive on that because that has gotta be a
                    huge. That's a huge amount of especially I and I I've told my friends this. It's that's an insane
                    amount of risk because you're working with an unauthorized API.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=33m40s"
                        data-turbo="false" title="Jump to 33:40 in this episode">33:40</a>)
                    <br>Yeah.
                </p>

                <p>That's that's a scary company run.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=33m57s"
                        data-turbo="false" title="Jump to 33:57 in this episode">33:57</a>)
                    <br>that you have no documentation for, you know, it's not even really an API. You're tapping into
                    another service that on a whim can change. Which it has before, it has before. I've had my psych
                    knocked off for four or five days at a time where the wait time system was down for four or five
                    days because Disney made a change. And then we're left scrambling trying to figure out how to
                    support it.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=34m8s"
                        data-turbo="false" title="Jump to 34:08 in this episode">34:08</a>)
                    <br>Yeah, yeah, that's.
                </p>

                <p>Yeah, that could be a scary place when you like kind of depend on a third party API. But when you I
                    feel like the way you run it is that a good place. It's kind of a passion project level. It's just
                    like, you know, if it goes down, I kind of run with the punches. But these people who make these
                    quite what it sounds like the quite the big investments, it's such a big risk. So it can be a scary
                    place to be in. So one thing I wanted ask on is just being a solo developer and to this project</p>

                <p>And as you know, we have these side projects, we have all these great ideas that might come our way.
                    For me personally, I have a hard time with getting past that, what Aaron Francis community, he calls
                    it just the, last 10 % or just that last marketing initiative to just get past the cruft or kind of
                    marketing. You build your app and you're excited about it. got, you got all the fun parts. You built
                    your app, you did all the things that were difficult.</p>

                <p>And now you have to do the marketing. You have to like do the set up your domain and just get it live
                    and then actually launch it. So my question for you is like, advice do you have for us and we're
                    just as developers looking to build like niche websites or tools around their passions, particularly
                    overcoming that like 10 % getting over that hump of actually pushing through it, getting it live.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=35m36s"
                        data-turbo="false" title="Jump to 35:36 in this episode">35:36</a>)
                    <br>Mm-hmm.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=35m43s"
                        data-turbo="false" title="Jump to 35:43 in this episode">35:43</a>)
                    <br>I think it's one of those things you just have to accept. It's not going to immediately happen.
                    When I launched WDW passport that was 2017 and I only had a couple hundred people visiting a month
                    took years for the finally get a Google AdSense payment sent to me like I was running at a loss for
                    you know, and luckily I was just on like a $5 Linode
                </p>

                <p>and then all of a sudden, you know, the SEO work started to pay off. started, you know, started
                    getting ranked on Google and whatnot. I think with like a passion, like I could have grown WDW
                    Passport much faster had I been like living here in Orlando, all the...</p>

                <p>that time and producing other content than just wait times like, know, just running like a blog,
                    like, you know, and doing content like that. And that's just something I've thought about doing, but
                    I ended up not doing because I kind of enjoy that. get to, I get to go to the parks and be like,
                    yeah, I have a website, but it's not a blog and I don't need to be like,</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=36m35s"
                        data-turbo="false" title="Jump to 36:35 in this episode">36:35</a>)
                    <br>Yeah.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=36m54s"
                        data-turbo="false" title="Jump to 36:54 in this episode">36:54</a>)
                    <br>taking pictures of everything I'm doing at the park to, you know, it's, you know, I have a, I
                    have a Disney site that I'm making money off of paying for my time going to the parks, but I don't
                    need to actually do anything in the parks to support it. Like it's because I, you know, I see people
                    all the time. It's become a big, big thing here lately, like the, just the bloggers and stuff like
                    that. It's not even the bloggers anymore. It's like Tik Tok, Instagram, stuff like that.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=37m5s"
                        data-turbo="false" title="Jump to 37:05 in this episode">37:05</a>)
                    <br>You
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=37m5s"
                        data-turbo="false" title="Jump to 37:05 in this episode">37:05</a>)
                    <br>Mm-hmm.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=37m23s"
                        data-turbo="false" title="Jump to 37:23 in this episode">37:23</a>)
                    <br>You know, those people, some of them, they have a legitimate make a living off of it, but
                    they're living their entire time at Disney behind their phone because they're having to capture
                    everything, which, know, it's just like the live streamers, which I, I, I get, I get the appeal, but
                    man, I was at a bar, I was at a bar net once and the guy next to me was live streaming on either
                    about.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=37m37s"
                        data-turbo="false" title="Jump to 37:37 in this episode">37:37</a>)
                    <br>Mm-hmm.
                </p>

                <p>I've never understood the live streamers. Yeah.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=37m51s"
                        data-turbo="false" title="Jump to 37:51 in this episode">37:51</a>)
                    <br>whacked the phone like it was it was so annoying because I'm like I'm trying to have a
                    conversation with the bartender like you know about like you know local like you know like stuff I
                    really want live streamed
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=37m52s"
                        data-turbo="false" title="Jump to 37:52 in this episode">37:52</a>)
                    <br>Mm-hmm. Yeah. We had a similar...
                </p>

                <p>Yeah, we had a very similar encounter and they're coming more more popular recently. And so, yeah, it
                    can really throw you off from the of the vibe of just enjoying your time with the family. Now got a
                    screen just like, you know, some guy just showing everything that's going on around them. Yeah.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=38m19s"
                        data-turbo="false" title="Jump to 38:19 in this episode">38:19</a>)
                    <br>Yeah, but back to what you were saying with the it's this time. I think it's you know, and if
                    you do have the capital, I think I've never advertised. My site, the only time I've ever done
                    anything promotional wise, I sponsored a tree for at the give kids the world holiday event about two
                    years ago.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=38m24s"
                        data-turbo="false" title="Jump to 38:24 in this episode">38:24</a>)
                    <br>Mm-hmm.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=38m43s"
                        data-turbo="false" title="Jump to 38:43 in this episode">38:43</a>)
                    <br>And that really wasn't that much. was only a couple hundred bucks. And, you know, they just put
                    a sign out in front of a tree that I got to decorate. But other than that, kind of hardly got any
                    scans from the QR code. Like it was, it was more, it was more of a, you know, just supporting the
                    organization. was, you know, then, then promoting my business at all. You know, it's, I think.
                </p>

                <p>developing something you are interested in and you're passionate because if you're just trying to
                    create something for somebody else, especially as a side project, you're not going to really have
                    motivation for that. it's going to be hard to, you not to bag on our clients or anything that, you
                    know, because that's what I do.</p>

                <p>All day at work, you know, I'm working on other businesses that have hired us, but I don't
                    necessarily, you know, have a say in that, you know, and I've been working with these clients long
                    enough now that I do have an interest in like the actual industry. But when you first sign on a
                    client, you know, you're not big into it, but you have to be because that's, know, you're getting
                    paid. But when you're doing a side project and there's no guaranteed money in it.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=39m37s"
                        data-turbo="false" title="Jump to 39:37 in this episode">39:37</a>)
                    <br>Hmm.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=40m1s"
                        data-turbo="false" title="Jump to 40:01 in this episode">40:01</a>)
                    <br>You know, it's hard to get passionate about it. And I think that's what, for me, it's ended up
                    being a lot of fun because, it was always in the back of my head that would be, Hey, it would be
                    kind of nice to make money off of this. But at the same time, I didn't really want to put it the
                    capital and the effort and like that. I could have, I absolutely could have, but I kind of, I just
                    wanted to see what can I build.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=40m1s"
                        data-turbo="false" title="Jump to 40:01 in this episode">40:01</a>)
                    <br>Yeah.
                </p>

                <p>Right.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=40m27s"
                        data-turbo="false" title="Jump to 40:27 in this episode">40:27</a>)
                    <br>From nothing just from just from doing organic and it's just been nuts. You know, it's taking
                    time to get there, but it's been nuts to you know, just say like yeah, I've spent zero on
                    advertising and I haven't needed like to post on Instagram every day and you know.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=40m29s"
                        data-turbo="false" title="Jump to 40:29 in this episode">40:29</a>)
                    <br>Yeah, I love that.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=40m45s"
                        data-turbo="false" title="Jump to 40:45 in this episode">40:45</a>)
                    <br>Yeah, because I mean, I'm kind of in the same boat as you, Doug. I recently built some passion
                    projects on the side. However, I don't tell anybody, but I have a lot of paid advertising. And let
                    me tell you, it makes my armpit sweat thinking about all the money you're just pouring out there and
                    you might get like one click and then that one click might not even do anything. But
                </p>

                <p>So yes, I appreciate that thought. I am curious though about like if you had any other passion
                    projects on the side that let's say Disney does send you a cease and desist. If you do, I would
                    frame that because not every day you get a cease and desist from Disney. Is there something else
                    that might be a contingency plan? Like if you're passionate about another thing, could you build
                    something else along those lines?</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=41m29s"
                        data-turbo="false" title="Jump to 41:29 in this episode">41:29</a>)
                    <br>Yeah.
                </p>

                <p>You know, right now I've honestly haven't really thought anymore about any kind of other projects to
                    do in my free time because honestly, it's not that I don't have a lot of free time, it's just that,
                    you know, this is my now 12th year full time. And after 12 years, you know, I'm at a...</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=41m42s"
                        data-turbo="false" title="Jump to 41:42 in this episode">41:42</a>)
                    <br>if that makes sense.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=42m11s"
                        data-turbo="false" title="Jump to 42:11 in this episode">42:11</a>)
                    <br>comfortable level, know, salary wise and all that, you know, I, not really driven by the, you
                    know, the money at this point. it's just kind of like, I want to get done with the day. Like I
                    honestly don't do a whole lot of work with WDW passport at this point. It's kind of.
                </p>

                <p>kind of been complete for a bit. Like it's, haven't really built any big new features on in the last
                    bit. It's just kind of maintaining the existing features, you right now because it's just one of
                    those things I'm just so busy at</p>

                <p>my day job that when I'm done, like last thing I want to do is find a computer more. Like, you know,
                    I'm out of here. heading to a brewery, to the theme parks, like, you know. Yeah.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=42m45s"
                        data-turbo="false" title="Jump to 42:45 in this episode">42:45</a>)
                    <br>to write some more code.
                </p>

                <p>Especially living in Orlando, absolutely.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=42m55s"
                        data-turbo="false" title="Jump to 42:55 in this episode">42:55</a>)
                    <br>Yeah, so I mean, to that point, really the only thing that excites me to work past my day job is
                    when I see new technologies. So things like Flux came out. I'm excited. I kind of want to try that.
                    That might spark an idea of, I might have just a little side project that I can work on for Flux, or
                    I might have a little side project I can work on for Inertia 2.0. Have you seen anything in the
                    news, anything?
                </p>

                <p>recently been released that sort of has that little spark of inspiration like ooh, you know what? I
                    might want to do a little bit of that over here or I could add flux to.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=43m32s"
                        data-turbo="false" title="Jump to 43:32 in this episode">43:32</a>)
                    <br>Yeah, reverb reverb definitely got my gears turning, but I never really really ran with it. As I
                    thought about it for my wait times page like you know, that would be really cool to do it like
                    update instantly and whatnot. But at the same time, this needs on updating wait times that often to
                    make it worthwhile. Yeah, there's.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=43m56s"
                        data-turbo="false" title="Jump to 43:56 in this episode">43:56</a>)
                    <br>If drones are, if drones were legal at Disney World, you could do a power drone and then go see
                    the queue lines and say, okay.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=44m0s"
                        data-turbo="false" title="Jump to 44:00 in this episode">44:00</a>)
                    <br>huh. huh.
                </p>

                <p>Ha ha ha ha.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=44m4s"
                        data-turbo="false" title="Jump to 44:04 in this episode">44:04</a>)
                    <br>Yeah, yeah. Yeah, no, I've always joked about like hiding, like building like these, my own like
                    bots that I put, you know, around the, that building my own like wait time, like, you know, where
                    you're like scanning how many people like walk through the gate, but you know, they'll find, they'll
                    find those things after not even a day.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=44m19s"
                        data-turbo="false" title="Jump to 44:19 in this episode">44:19</a>)
                    <br>people walk through. Yeah. Yeah,
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=44m21s"
                        data-turbo="false" title="Jump to 44:21 in this episode">44:21</a>)
                    <br>Mm-hmm.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=45m13s"
                        data-turbo="false" title="Jump to 45:13 in this episode">45:13</a>)
                    <br>Yeah, it's there. There is. I have never gotten any emails or anything from people being like,
                    Hey, it be really nice to have this like as an app because it just works as a website way because he
                    just, you know, that's what people are doing. They're Googling Disney wait times and then pop up and
                    they open it up and you know, I think you just look around on the industry.
                </p>

                <p>Disney's really the only one in the theme park industry that's kind of gotten that went full on with
                    technology and like apps and stuff like that. You compare like, know, Universal has an app, is fine,
                    but you know, Universal, doesn't come into play as much because they don't have a reservation system
                    for, they're, they, you can make dining reservations, but you'd.</p>

                <p>don't necessarily need them at Universal. And then stuff like Cedar Point and whatnot, they're kind
                    of the same way. The technology required to make those apps work, and that's probably where Holiday
                    World's at, that the technology needed is just so expensive. And you need...</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=46m17s"
                        data-turbo="false" title="Jump to 46:17 in this episode">46:17</a>)
                    <br>Mm-hmm.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=46m25s"
                        data-turbo="false" title="Jump to 46:25 in this episode">46:25</a>)
                    <br>The cloud server you need will not even that you need to build like either the detection like
                    you need to build the detectors in the line or I think I've heard. I can't remember what part I
                    think some parks do and maybe this is even at Disneyland like for the older rights because
                    Disneyland's you know quite a bit older than they haven't invested in the technology as much there.
                    I want to say I heard rumbles that at Disneyland for some of the older rights. They literally just
                    have like a.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=46m34s"
                        data-turbo="false" title="Jump to 46:34 in this episode">46:34</a>)
                    <br>A lot of it, yeah.
                </p>

                <p>Mm-hmm.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=46m54s"
                        data-turbo="false" title="Jump to 46:54 in this episode">46:54</a>)
                    <br>iPhone or iPod or whatever and every so often they just manually go into their app then through
                    their internal app and just punch in what they think the wait time is. Yeah.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=47m0s"
                        data-turbo="false" title="Jump to 47:00 in this episode">47:00</a>)
                    <br>time.
                </p>

                <p>I think it's 15 minutes. Yeah. Yeah. I see a lot of them, take like a card or like a lanyard and they
                    give it to the person at the front of the, like they'll take it from the line. And then once they
                    board the line, the person operating where I'll take it and scan it or something. But yeah, that, is
                    a big cost.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=47m18s"
                        data-turbo="false" title="Jump to 47:18 in this episode">47:18</a>)
                    <br>Yeah, I see that I see that more often California than here. think here I think they can do that
                    now with the Magic bands. I don't necessarily know if they do or not. I you know a lot of the that's
                    all like internal with Disney and nobody knows. Yeah, it's it's a secret.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=47m22s"
                        data-turbo="false" title="Jump to 47:22 in this episode">47:22</a>)
                    <br>Yeah.
                </p>

                <p>Yeah.</p>

                <p>It's all their secrets, yeah. Yeah, that's how they make, yeah, yeah, for So Dalton, did you have
                    anything you Sorry, I don't know, I've been talking up most about Disney lingo quite a bit.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=47m42s"
                        data-turbo="false" title="Jump to 47:42 in this episode">47:42</a>)
                    <br>Perfect.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=47m42s"
                        data-turbo="false" title="Jump to 47:42 in this episode">47:42</a>)
                    <br>How you guys can have your Disney conversation? I'm just, I'm so curious about your tech stack
                    really. please forgive me Doug that I'm not a Disney, I don't go to Disney a whole lot but I am a
                    big, big LiveWire fan.
                </p>

                <p>I'm more curious on how you use Livewire with your queue systems. Do you have multiple queues? Do you
                    have a priority queue Sorry, I'm talking.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=47m57s"
                        data-turbo="false" title="Jump to 47:57 in this episode">47:57</a>)
                    <br>So.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=48m4s"
                        data-turbo="false" title="Jump to 48:04 in this episode">48:04</a>)
                    <br>Yeah, so basically right now, Basically, when I get a WebSocket now with a wait time, it goes in
                    and it recalculates, a queue job on the back end that recalculates all of that and puts it into a
                    cache. And then the live
                </p>

                <p>component just reads that cache. It won't even attempt to actually run the code to regenerate the
                    wait time like graphs and all that. It just it'll just throw like a 503 error that says like not
                    available.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=48m38s"
                        data-turbo="false" title="Jump to 48:38 in this episode">48:38</a>)
                    <br>Interesting. Okay. Yeah. Yeah, that's that's what is gonna be my follow-up. How many do you
                    have?
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=48m39s"
                        data-turbo="false" title="Jump to 48:39 in this episode">48:39</a>)
                    <br>How many jobs is that? Is that how many? It's a ton, right?
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=48m43s"
                        data-turbo="false" title="Jump to 48:43 in this episode">48:43</a>)
                    <br>Yeah, it's it's it's getting hit. I well I do. I do have a I have it set to do. Unique ID like
                    so the queue doesn't get overloaded, but let me look.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=48m53s"
                        data-turbo="false" title="Jump to 48:53 in this episode">48:53</a>)
                    <br>Mm-hmm.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=48m54s"
                        data-turbo="false" title="Jump to 48:54 in this episode">48:54</a>)
                    <br>So in five minute increments, it's running like 4350 times. So I every 10 seconds or so. And you
                    got it. And that's, and that's for, you know, there's four different parks at Disney world. So each
                    of those has its own like cache entry and all that.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=49m1s"
                        data-turbo="false" title="Jump to 49:01 in this episode">49:01</a>)
                    <br>Mm-hmm. Every year. Mm-hmm.
                </p>

                <p>Mm-hmm, yeah. yeah, cause I was curious, like when I was looking at it, I like, wonder how many jobs
                    this is running in the background because like the chart looks like it's every minute you can see,
                    but that's so clever of doing it through WebSockets and just doing a quick refresh and as they come
                    in real time.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=49m25s"
                        data-turbo="false" title="Jump to 49:25 in this episode">49:25</a>)
                    <br>No, it's great. It's great. And before it it was running every minute before it was running
                    every minute and just comparing the previous wait time with the one that's on.
                </p>

                <p>on the API right now and if it was different then it would go in and save that and then I have then I
                    actually do every 15 minutes I still do a because that's how the website used to one it used to one
                    only every 15 minutes but I still do that and it's I can say I call that the snapshot because there
                    are some times where lesser busy rides don't update at all they're just at like five minutes all day
                    and so if I don't have</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=49m38s"
                        data-turbo="false" title="Jump to 49:38 in this episode">49:38</a>)
                    <br>Mm-hmm.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=50m7s"
                        data-turbo="false" title="Jump to 50:07 in this episode">50:07</a>)
                    <br>that snapshot running, then it won't save those wait times for the rest of the day. And then you
                    get into the chart at the end of the day, and there's like one time in the morning, and there's no
                    other like time points throughout.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=50m18s"
                        data-turbo="false" title="Jump to 50:18 in this episode">50:18</a>)
                    <br>Yeah, So when you're pulling these numbers, is Haunted Mansion, when you said five minutes, is
                    Haunted Mansion always 13 from the API or is it five minutes?
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=50m27s"
                        data-turbo="false" title="Jump to 50:27 in this episode">50:27</a>)
                    <br>Yeah, no, it is actually it is actually hard coded into the API is 13 minutes. Yeah, yeah.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=50m31s"
                        data-turbo="false" title="Jump to 50:31 in this episode">50:31</a>)
                    <br>13, I love that, that's cool.
                </p>

                <p>with the WD passport, are there any hacks that you'd like to share for like planning to the parks?
                    Like for me, when I'm planning, like maybe a tool or something people don't generally use, or maybe
                    something that you personally use all the time, what you find the greatest benefit out of using WD
                    passport?</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=50m53s"
                        data-turbo="false" title="Jump to 50:53 in this episode">50:53</a>)
                    <br>I have a couple of features where, I monitor quick spikes, I try to monitor those,
                </p>

                <p>I so you'll see that like sometimes, sometimes a ride will be minutes and then all of sudden it's an
                    hour, hour wait. And usually that's because most, a lot of the rides at Disney have like multiple
                    tracks or, know, there's not just one ride. There's like multiple rides.</p>

                <p>that they split up the capacity with. Mania, right, is a good example. It has three different tracks,
                    and often two of the tracks will go down. So you have...</p>

                <p>the capacity cut down to a third of what it's supposed to be and the wait time will go immediately
                    like up by like an hour. Because I've had that happen like in line because the other thing you gotta
                    remember once you get in line they're not telling you.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=51m29s"
                        data-turbo="false" title="Jump to 51:29 in this episode">51:29</a>)
                    <br>Yeah.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=51m46s"
                        data-turbo="false" title="Jump to 51:46 in this episode">51:46</a>)
                    <br>What what the sign is out front so it's really nice to have that in your hand because I'll do
                    that all the time. We'll get in the line for something and will be standing there and it's like this
                    is this is not taking what they said it was in the load up my my side and say great now it's like
                    posted at like two hours. Yeah.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=52m5s"
                        data-turbo="false" title="Jump to 52:05 in this episode">52:05</a>)
                    <br>Yeah, Yeah, that's not gonna be watching those those lines next time we go so it'll be in
                    November So hopefully won't be too bad. It'll be kind of be the post Halloween stuff.
                </p>

                <p>do you do you are you aware of any Laravel developers at Disney World? there's been there's been some
                    proof behind it, but I don't know if you know of any Laravel developers.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=52m25s"
                        data-turbo="false" title="Jump to 52:25 in this episode">52:25</a>)
                    <br>I personally don't know any Disney developers. I believe they've started the outsource a lot and
                    when what I heard like years ago they were Zend. Wouldn't surprise me if they're still Zend. I
                    legitimately just don't know what what's going on inside the Disney.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=52m46s"
                        data-turbo="false" title="Jump to 52:46 in this episode">52:46</a>)
                    <br>Hmm, yeah.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=52m49s"
                        data-turbo="false" title="Jump to 52:49 in this episode">52:49</a>)
                    <br>Disney's inner workings. It's very, close lips and seemingly everybody that goes to work and
                    works there, the contracts you sign with them, you cannot get an ounce of information. mean, one of
                    the bars I go to is right across the street from the new Epic Universe.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=53m3s"
                        data-turbo="false" title="Jump to 53:03 in this episode">53:03</a>)
                    <br>Yeah, you have to stay quiet.
                </p>

                <p>Yep. Yep.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=53m15s"
                        data-turbo="false" title="Jump to 53:15 in this episode">53:15</a>)
                    <br>for the new Universal theme park. And even after putting a few beers in those workers, they
                    still won't tell you anything. Yeah, they still won't. Yeah, the theme park industry, those people,
                    they will not tell you anything.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=53m22s"
                        data-turbo="false" title="Jump to 53:22 in this episode">53:22</a>)
                    <br>That's how you... yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=53m23s"
                        data-turbo="false" title="Jump to 53:23 in this episode">53:23</a>)
                    <br>You
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=53m26s"
                        data-turbo="false" title="Jump to 53:26 in this episode">53:26</a>)
                    <br>Yeah. yeah. Nope. Yeah. Coming from a place where at holiday world with, we had a big attraction
                    called Thunderbird and people would ask me all the time about like, try to poke at me, just try to
                    get the smallest hints out of me. Like, cause I knew what the project was. Thunderbird was a wing
                    coaster, kind of what you're describing. And it's just like, so badly, do you want to kind of throw
                    him a toss him a bone or something? But then it's like, in your mind, you're going like, this is,
                    you know, you don't want that come back on you or anything or to the park.
                </p>

                <p>And so, and I have some friends that have moved from the theme park industry to working at Disney
                    full time. And when I talk with them, same thing as like you're describing, it's like, they won't
                    tell you much about the job. They'll just say it's going great. I love it, but they won't, they
                    don't like to go into a lot of the specifics</p>

                <p>You mentioned this earlier, I wanted to ask you about Give Kids the World Village and how you've
                    volunteered and done a lot with them.</p>

                <p>so for the listeners, give kids the world is a nonprofit resort in Florida and it, provides
                    critically ill children and their families with the week long vacations to, to central Florida theme
                    parks at no cost. So it's a really cool charity. It's actually my one of my favorite charities,
                    working in theme park industry here that that charity all the time. It's amazing. The things they
                    do.</p>

                <p>So wanted to talk about your experience with them and how that's kind of impacted your work today.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=54m48s"
                        data-turbo="false" title="Jump to 54:48 in this episode">54:48</a>)
                    <br>Yeah, for me it was one of those things. It's really cool for me because I get volunteer a lot
                    with people that actually work at Disney and a lot of people that work in really important parts of
                    Disney behind the scenes and they're using the, they get the same architects like Disney
                    Imagineering, Universal Creative.
                </p>

                <p>to build stuff for them. So it's basically kind of like working a theme park job without actually
                    having to work at the theme park because people ask me all the time, why don't you work at the
                    parks? It's because I love my job. I love being a developer. I work at a great company. I would be a
                    fool to leave my job. And so doing Give Kids a World allows me to...</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=55m20s"
                        data-turbo="false" title="Jump to 55:20 in this episode">55:20</a>)
                    <br>Mm-hmm. Yeah. Yep.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=55m37s"
                        data-turbo="false" title="Jump to 55:37 in this episode">55:37</a>)
                    <br>not only get out of the house, it, you know, kind of, it's kind of like working, I think,
                    because we have, they have like theme park rides. They actually have like rides at like, you would
                    see it at a theme park and it's kind of cool to get to, to control them because, you know, they
                    have, you know, the press the buttons and stuff like that, you know, you know, it's a lot of fun.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=55m54s"
                        data-turbo="false" title="Jump to 55:54 in this episode">55:54</a>)
                    <br>Mm-hmm.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=56m0s"
                        data-turbo="false" title="Jump to 56:00 in this episode">56:00</a>)
                    <br>It's a great organization and especially for recurring theme of, know, something you care about.
                    And, you know, it's, it's cool to give back and something I care about, which is the parks and
                    anything Park fan will tell you. We all know, like, in the last couple of years, it's just gotten
                    brutal with, prices and stuff like that. You, hear more and more about families that just can't
                    afford to go. That's, know,
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=56m20s"
                        data-turbo="false" title="Jump to 56:20 in this episode">56:20</a>)
                    <br>Mm-hmm.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=56m26s"
                        data-turbo="false" title="Jump to 56:26 in this episode">56:26</a>)
                    <br>It's their, you know, their dream to go to Disney and whatnot, or people that are coming down
                    now and they can only afford like one day in the parks. yeah, it's a really cool organization to
                    work with. like, you know, it's like working in theme park, but with no strings attached
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=56m35s"
                        data-turbo="false" title="Jump to 56:35 in this episode">56:35</a>)
                    <br>Mm.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=56m42s"
                        data-turbo="false" title="Jump to 56:42 in this episode">56:42</a>)
                    <br>It's arguably a much better feeling at night knowing that you're supporting these families that
                    go through so much than shareholders.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=56m55s"
                        data-turbo="false" title="Jump to 56:55 in this episode">56:55</a>)
                    <br>Developers love pressing buttons.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=56m59s"
                        data-turbo="false" title="Jump to 56:59 in this episode">56:59</a>)
                    <br>Yeah, no, they actually just opened a stem of kind of like area about a month or two ago and
                    they've got like animatronics that you can play with like it's really, really cool. So yeah, I
                    definitely recommend like people to check out what they're doing, donate to them. I think here in
                    October last I heard.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=57m4s"
                        data-turbo="false" title="Jump to 57:04 in this episode">57:04</a>)
                    <br>Mm-hmm.
                </p>

                <p>That's neat.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=57m21s"
                        data-turbo="false" title="Jump to 57:21 in this episode">57:21</a>)
                    <br>They were going to be at or near full capacity for the entire month of October, which is
                    fantastic news because I was, when I first moved down here, there were some weeks where we'd only
                    have 10 families on property for the entire week. And it was a ghost town. was a ghost town. was
                    really, it was really disheartening, but it's so great to see it now filled to the brim and just
                    like so many people making memories and you know.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=57m43s"
                        data-turbo="false" title="Jump to 57:43 in this episode">57:43</a>)
                    <br>Mm-hmm. Love that.
                </p>

                <p>So Dalton, did you have any more questions?</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=57m53s"
                        data-turbo="false" title="Jump to 57:53 in this episode">57:53</a>)
                    <br>I do not. think I've poked the technological bear enough.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=57m56s"
                        data-turbo="false" title="Jump to 57:56 in this episode">57:56</a>)
                    <br>Yeah.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=57m56s"
                        data-turbo="false" title="Jump to 57:56 in this episode">57:56</a>)
                    <br>Yeah, it's it's it's I think people are very very shocked how much technology is involved at
                    Disney and I I mean I remember when they started I think I have it it's up on my board over here. I
                    was part of one of the first tests of the electric the electronic fastpass system when they started
                    switching over to that in like 2012. I think that's when they started the test it and I think
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=58m20s"
                        data-turbo="false" title="Jump to 58:20 in this episode">58:20</a>)
                    <br>Wow.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=58m26s"
                        data-turbo="false" title="Jump to 58:26 in this episode">58:26</a>)
                    <br>The rumors I heard, I think it's somewhere in the tune of they spent a billion on the initial
                    development of the Magic Bands and the Fastpass Plus system. And over the years, it's probably,
                    they've probably have spent at this point, probably $2 billion in all of this. And I mean, it shows,
                    like it's, it's, it's admittedly very cool that like,
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=58m45s"
                        data-turbo="false" title="Jump to 58:45 in this episode">58:45</a>)
                    <br>Yeah.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=58m50s"
                        data-turbo="false" title="Jump to 58:50 in this episode">58:50</a>)
                    <br>The the whole like tap styles where you take your band now like the apple watch and the iphones
                    now work with it's really cool. It's like it You just hold up your your your watch. I don't even
                    wear magic bands anymore because I just use my phone But those tap styles they've had those tap
                    styles for probably 10 years now and it's just nuts that those Things have have worked for so long
                    versus where universal
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=58m57s"
                        data-turbo="false" title="Jump to 58:57 in this episode">58:57</a>)
                    <br>Mm-hmm. Yeah.
                </p>

                <p>Mm-hmm.</p>

                <p>Mm-hmm.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=59m18s"
                        data-turbo="false" title="Jump to 59:18 in this episode">59:18</a>)
                    <br>They just started testing out facial recognition about a year or so ago and now it's on all of
                    their intraskates now. So when you go to Universal, Universal was previously like Disney where you
                    have a fingerprint and now they're using faces and it's kind of smart because it works a lot faster.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=59m41s"
                        data-turbo="false" title="Jump to 59:41 in this episode">59:41</a>)
                    <br>Wow.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=59m42s"
                        data-turbo="false" title="Jump to 59:42 in this episode">59:42</a>)
                    <br>But you can tell, like Universal, it's night and day with Disney and Universal, like the
                    technology-wise. What's going on, like Universal, their hotels, it's still very old school, like you
                    have a room key, there's no app for it, versus Disney where you have an app and then, you know.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=59m56s"
                        data-turbo="false" title="Jump to 59:56 in this episode">59:56</a>)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=59m57s"
                        data-turbo="false" title="Jump to 59:57 in this episode">59:57</a>)
                    <br>Pleasants.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=1h0m1s"
                        data-turbo="false" title="Jump to 1:00:01 in this episode">1:00:01</a>)
                    <br>Yeah, one of the coolest things that I remember like coming to TechnologyWise with Disney was
                    when I got to my my wife went to go get food and I remembered I left my Magic Band with her. And
                    then I remember the cast member telling me that you can unlock the doors now with your phone. I pull
                    it out, just like, yeah, just raise it to your, raise your phone to the door and now it unlocked. I
                    was like, this is cool. So yeah.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=1h0m17s"
                        data-turbo="false" title="Jump to 1:00:17 in this episode">1:00:17</a>)
                    <br>Yeah.
                </p>

                <p>Yeah, I think that's why there's been such a big overlap between developers and Disney in the last
                    decade or so. I think it always was a big deal. I got into theme parks and all that from Rollcoaster
                    Tycoon back in the day. And that's how I got into web development, actually, was Rollcoaster Tycoon
                    was showing projects and building forums and stuff like that. And now just with the amount of
                    technology inside the parks, like in...</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=1h0m39s"
                        data-turbo="false" title="Jump to 1:00:39 in this episode">1:00:39</a>)
                    <br>Mm-hmm.
                </p>

                <p>really? That's cool.</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=1h0m53s"
                        data-turbo="false" title="Jump to 1:00:53 in this episode">1:00:53</a>)
                    <br>You you can't basically can't go to Disney without the app anymore.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=1h0m59s"
                        data-turbo="false" title="Jump to 1:00:59 in this episode">1:00:59</a>)
                    <br>Definitely. All right, so Doug, would you like to touch on anything else that we may have
                    missed? We feel like we covered quite a good load of topics, but anything else that you'd like to
                    talk about today?
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=1h1m11s"
                        data-turbo="false" title="Jump to 1:01:11 in this episode">1:01:11</a>)
                    <br>No, I don't think so. Like, yeah, it's been cool to talk with you guys. I don't really talk with
                    many people about the inner technology workings of what I do because it's all over my friends'
                    heads. My friends know I have the site and whatnot, but they don't really a ask in me about how it
                    works or whatnot. They do sometimes ask, like, hey, do you think it's going to be crowded tomorrow
                    or whatnot?
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=1h1m26s"
                        data-turbo="false" title="Jump to 1:01:26 in this episode">1:01:26</a>)
                    <br>Yep.
                </p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=1h1m41s"
                        data-turbo="false" title="Jump to 1:01:41 in this episode">1:01:41</a>)
                    <br>I don't know like it's just like what I put on the website on new crowd predictions. I don't
                    know
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=1h1m43s"
                        data-turbo="false" title="Jump to 1:01:43 in this episode">1:01:43</a>)
                    <br>You
                </p>

                <p>sure. So for people listening, where can they find you Doug?</p>

                <p>Doug Sisk (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=1h1m52s"
                        data-turbo="false" title="Jump to 1:01:52 in this episode">1:01:52</a>)
                    <br>So yeah, I'm on Twitter, Doug underscore SISK I don't really tweet a whole lot. I'm not like
                    very active on social media. I know that's something I needed to be better about. it's just a lot of
                    my work is not secretive, but it's pretty specialized and...
                </p>

                <p>work kind of in a cutthroat industry and we don't want to be giving our competitors knowledge. but
                    you know, I, yeah, no, I do, I do, I definitely need to get out and talk more and you know, I've
                    toyed with applying to speak at Laracon but I haven't figured out like what to do for a talk.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=1h2m21s"
                        data-turbo="false" title="Jump to 1:02:21 in this episode">1:02:21</a>)
                    <br>Absolutely, yeah. It is very fun and interesting though,
                </p>

                <p>You should, Yeah, for sure. Awesome. Well, thank you so much for being on the show. And with that,
                    Dalton you would like to do a wrap?</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=1h2m48s"
                        data-turbo="false" title="Jump to 1:02:48 in this episode">1:02:48</a>)
                    <br>want me to do it?
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=1h2m49s"
                        data-turbo="false" title="Jump to 1:02:49 in this episode">1:02:49</a>)
                    <br>Yeah, he did last show he did good.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/wdwpassport-w-doug-sisk/transcript#t=1h2m53s"
                        data-turbo="false" title="Jump to 1:02:53 in this episode">1:02:53</a>)
                    <br>Thank you all for listening to another episode of the Midwest Artisan. I've been Dalton, that's
                    Andy, and special thanks to our special guest Doug for sitting in and talking all about his
                    experiences and his skills. Much appreciated. Thank you all for listening. We'll see you next time.
                </p>

            </div>
        </div>
</x-app>
