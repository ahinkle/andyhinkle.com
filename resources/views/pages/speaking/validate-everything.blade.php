<x-app>
    <x-slot name="seo">
        <title>Validate Everything</title>
        <meta name="description"
            content="This week we discuss the common occurrence of over-engineered abstractions, digging into post-request logic without losing our minds,  analytics, and securing digital assets.">
        <meta property="og:title" content="Building for Clients or Ourselves? Sticky & Static">
        <meta property="og:description"
            content="This week we discuss the common occurrence of over-engineered abstractions, digging into post-request logic without losing our minds,  analytics, and securing digital assets.">

        <script type="application/ld+json">
            {
            "@context": "https://schema.org/",
            "@type": "PodcastEpisode",
            "url": "https://the-midwest-artisan.transistor.fm/episodes/validate-everything",
            "name": "Validate Everything",
            "datePublished": "2024-10-28",
            "timeRequired": "PT1H8M15S",
            episodeNumber: "8",
            "description": "This week we discuss the common occurrence of over-engineered abstractions, digging into post-request logic without losing our minds,  analytics, and securing digital assets.",
            "associatedMedia": {
                "@type": "MediaObject",
                "embedUrl": "https://www.youtube.com/watch?v=aGSA4GLe3a0"
            },
            "publisher": {
                "@type": "Organization",
                "name": "The Midwest Artisan",
                "url": "https://the-midwest-artisan.transistor.fm"
            }
        </script>
    </x-slot>

    <p class="text-white/75 text-center text-sm py-2 font-sans">October 28, 2024</p>
    <h1 class="text-3xl md:text-5xl font-bold text-white text-center font-sans">
        Validate Everything
    </h1>

    <div class="max-w-3xl mx-auto mt-8">
        <div class="px-4 pb-10">
            <iframe width="100%" height="180" frameborder="no" scrolling="no" seamless=""
                src="https://share.transistor.fm/e/b999fe13?color=1F2937&background=101827"></iframe>
        </div>

        <div class="px-4 prose prose-lg dark:prose-invert">
            <div>This week we discuss the common occurrence of over-engineered abstractions, digging into post-request
                logic without losing our minds, analytics, and securing digital assets.
            </div>
        </div>

        <div class="px-4 mt-8">
            <iframe class="w-full h-96" src="https://www.youtube.com/embed/aGSA4GLe3a0?si=NXchsI80UDk5CcsS"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <h2 class="text-2xl font-bold text-white text-center mt-12">Transcript</h2>

        <div class="px-4 prose prose-sm dark:prose-invert">
            <section class="episode-description episode-transcript" x-show="transcript">
                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=0m2s" data-turbo="false"
                        title="Jump to 00:02 in this episode">00:02</a>)
                    <br>Welcome to another episode of The Midwest Artisan. I'm your host, Andy Hinkle.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=0m6s" data-turbo="false"
                        title="Jump to 00:06 in this episode">00:06</a>)
                    <br>and I'm your co-host Dalton McLeary.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=0m9s" data-turbo="false"
                        title="Jump to 00:09 in this episode">00:09</a>)
                    <br>So how's the going,
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=0m11s" data-turbo="false"
                        title="Jump to 00:11 in this episode">00:11</a>)
                    <br>So yeah, it's two weeks into launch, new products, lots of impressions, lots of clicks, lots of
                    traffic, no sales. Nobody's bought it yet, which I expected. Honestly, I expected at least a month
                    before somebody would buy anything. I've got paid ads, I've got sponsorships out, and I've got
                    feelers getting pushed out, but nobody's converting yet.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=0m30s" data-turbo="false"
                        title="Jump to 00:30 in this episode">00:30</a>)
                    <br>Your effort.
                </p>

                <p>You have an advertisement on X, right? Yeah, because I've seen it. I've read it. I've got the ad
                    myself. And that's what I noticed. I was like, hey, Dalton's on. Yeah, it's on here. And that's when
                    I noticed, dude, this has 40,000 views.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=0m44s" data-turbo="false"
                        title="Jump to 00:44 in this episode">00:44</a>)
                    <br>Yes, yes, so I...
                </p>

                <p>Hey, it's working!</p>

                <p>Yeah. Yeah, that's what I mean. It's, it's a lot of impressions. think the, that, advertisement cost
                    me about a hundred dollars and it got a little under 44,000 impressions and it was like 150 clicks
                    of the link. So it was like less than 0.1 % of impressions actually clicked on the link. So, I mean,
                    that's to be expected. It's an, it's an advertisement for a sort of niche package product, but,</p>

                <p>That, that got me quite a bit of impressions and traffic. Ironically, I got, I put it on made with
                    Laravel that, that package system that actually got me a lot more traffic than the X one actually
                    did like actual traffic converting from madewithlaraval.com to my product. And so if, if anybody
                    else has packages, even if they're free or not, not necessarily paid, I would put them on made for
                    Laravel if you want some eyes on it for sure.</p>

                <p>That's been worth every dime that I could put into it. I wish I could put more actually. I would love
                    to.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=2m3s" data-turbo="false"
                        title="Jump to 02:03 in this episode">02:03</a>)
                    <br>So you're on Made with Laravel, you got that running, went, I saw you're on Filament Sponsorship
                    page, and then you're on Laravel News, so you're saying by far is the best one has been Made with
                    Laravel? Yeah.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=2m18s" data-turbo="false"
                        title="Jump to 02:18 in this episode">02:18</a>)
                    <br>Yep, yep. When I look at my analytics, most of the traffic or most of the referral traffic is
                    from Made with Laravel. That one's first and then Filament's second. Actually, Laravel News is
                    third.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=2m30s" data-turbo="false"
                        title="Jump to 02:30 in this episode">02:30</a>)
                    <br>Mm-hmm, yeah. So, do you have any inquiries? Anyone asking questions?
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=2m31s" data-turbo="false"
                        title="Jump to 02:31 in this episode">02:31</a>)
                    <br>So, made with Larval is great.
                </p>

                <p>I did get an email from someone asking about multilingual support. I was like, yeah, I have it on the
                    docket that I would like to do it, but I just haven't found the time for it. And actually this
                    person was super helpful. They were like, actually there's a current bug with filament using
                    repeatable fields in multilingual support, like using Spatie's multilingual package. Like it won't,
                    it doesn't work in repeater fields.</p>

                <p>So they're like, Hey, heads up. We like your stuff. I'm interested in multilingual support, but we
                    think you're going to run into an issue that we've run into. Like we, we sort of have this, this
                    idea as well, but it's not as like polished as what mine was.</p>

                <p>I was like, but you're going to run into this issue. And they actually sent me a link to the GitHub
                    issue for filament. So I've been keeping my eye on that to see when it gets through.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=3m33s" data-turbo="false"
                        title="Jump to 03:33 in this episode">03:33</a>)
                    <br>Look at those Laravel of all developers being helpful and telling you, you're gonna run into
                    these problems. So still think a demo. if I, yeah, go to your, I love the video you have. And I
                    want, and me as like somebody, cause I've seen kind of the internals, but somebody looking at the
                    surface, the video gets me excited. Like what the capabilities are. You just add in this component
                    and then you have a list of products. And then you add, you did like, you created a blade file and
                    then.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=3m34s" data-turbo="false"
                        title="Jump to 03:34 in this episode">03:34</a>)
                    <br>Very nice people.
                </p>

                <p>Yeah, very nice.</p>

                <p>Mm-hmm.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=4m1s" data-turbo="false"
                        title="Jump to 04:01 in this episode">04:01</a>)
                    <br>all of sudden you can customize the styling of each product. And that was really cool. And I
                    would be like, and I was like, I would love to just poke around in a demo and see the open source
                    side of it. Like if I could see the code versus yeah, but be really cool to see something like that.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=4m17s" data-turbo="false"
                        title="Jump to 04:17 in this episode">04:17</a>)
                    <br>Yeah. So I've, I've actually been working on that recently and it's like, it's going to be a
                    little easy. I'll make a new role because the package already comes with roles and permissions. I'll
                    make a new role. can just like view stuff, but you can't edit anything. I was like, but what's the
                    fun in that? If like, if I'm a developer and I want to try this out, I want to make like, I want to
                    make a page. I want to make a menu item. I want to, I want to build a site like I would normally.
                    The problem is if I just let people do that, it's, it's going to be chaos. So like, I have to write
                    some sort of.
                </p>

                <p>I've been writing the script that basically just resets the database with a seeder like every hour.
                    Basically, so people could come in there and create whatever they want and then just every hour
                    resets it back to what it is. That way people aren't just writing nasty things in there or deleting
                    pages or things of that nature.</p>

                <p>So that actually got a lot more complicated than I thought it was gonna be.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=5m11s" data-turbo="false"
                        title="Jump to 05:11 in this episode">05:11</a>)
                    <br>So my developer wheels are turning, so hear me out. So they're authenticated, I guess everyone's
                    going to be under the same user, probably like demo with the password of password. But maybe some
                    cookie or some abstraction where you can actually set a unique identifier. that is just the content
                    they're looking at is set by the cookie. So they could edit whatever they want, but no one else sees
                    that.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=5m20s" data-turbo="false"
                        title="Jump to 05:20 in this episode">05:20</a>)
                    <br>Yeah.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=5m35s" data-turbo="false"
                        title="Jump to 05:35 in this episode">05:35</a>)
                    <br>So now I think I just got your wheels turning too. was thinking like theoretically, because
                    anyone could just go in and type in whatever they want. Like you said, it's some expletive and then
                    it'll be there for an hour. Then all of a sudden it's all over Twitter. Like, hey, look, look at
                    this crap. yeah, something fun like that. If you want to allow them to edit. That would be something
                    that's way different than any other demo, honestly. I think that would be a huge, if you can figure
                    it out to do it right.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=5m37s" data-turbo="false"
                        title="Jump to 05:37 in this episode">05:37</a>)
                    <br>Hmm
                </p>

                <p>Yeah.</p>

                <p>Yeah, that's...</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=6m5s" data-turbo="false"
                        title="Jump to 06:05 in this episode">06:05</a>)
                    <br>because everything I see like a demo, it's like view only try to add something. Nah, you can't
                    do that. You know, for obvious reasons, you know, we just talked, but.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=6m9s" data-turbo="false"
                        title="Jump to 06:09 in this episode">06:09</a>)
                    <br>Hmm.
                </p>

                <p>Right, Yeah, because I really liked your idea of, don't want to have like, and this is the issue that
                    I wanted to like reset the databases. You said last time that it would be cool to see a demo, like
                    being able to work with a demo, but it being the, since the site is built with the package that the
                    site is supposed to be selling, it would be cool to actually see that site. Like I want to log into,
                    you know, autoload.dev and see how that marketing site is built.</p>

                <p>using the package that it's supposed to be selling. And so that's what I've been trying to work on is
                    have someone be able to log in but not delete my pages. They can create their own pages. And that's
                    where it's gotten, the complications have just gone off the deep end. I could just set up a
                    demo.autoload and it's just a blank page. You do whatever you want with it. I don't really care. But
                    I really liked what you said of I want to see how this site is built using this package that it's
                    supposed to be selling.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=6m58s" data-turbo="false"
                        title="Jump to 06:58 in this episode">06:58</a>)
                    <br>It's... yeah.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=7m11s" data-turbo="false"
                        title="Jump to 07:11 in this episode">07:11</a>)
                    <br>And that's sort of the road that I've gone on now. And it's quite a headache, if I'm being
                    honest with you. It's gotten way more complicated than what I initially thought it was supposed to
                    be.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=7m18s" data-turbo="false"
                        title="Jump to 07:18 in this episode">07:18</a>)
                    <br>Imagine
                </p>

                <p>Because it's so easy. There's just multiple avenues you could, you could approach it. but yeah, it's
                    also also like where I was just thinking, what if somebody is like, shoot, I just, I just defaced
                    this guy's website on accident, but they don't realize it's just for them. It's only just for to
                    them. And so maybe like, you know, a notification bar or something like, Hey, you're okay to edit
                    whatever you want. It's only you that sees it, but</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=7m39s" data-turbo="false"
                        title="Jump to 07:39 in this episode">07:39</a>)
                    <br>Yeah. Yeah.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=7m48s" data-turbo="false"
                        title="Jump to 07:48 in this episode">07:48</a>)
                    <br>Yeah, it'd be really cool, that technical wise, that's a huge undertaking.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=7m53s" data-turbo="false"
                        title="Jump to 07:53 in this episode">07:53</a>)
                    <br>It's, it's a bit of a brain tease. That's for sure. I think it's a great idea and I think it's
                    really clever. I I don't see a lot of people doing that. So I definitely want to try to keep
                    pursuing it, but, it has definitely thrown me for a loop, last week. I haven't touched it since
                    cause it threw me for such a big loop.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=7m56s" data-turbo="false"
                        title="Jump to 07:56 in this episode">07:56</a>)
                    <br>Yeah.
                </p>

                <p>Yeah, for sure. So that's with your company Merge Loop and the products are... Would you like to give
                    a little thing about your products?</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=8m23s" data-turbo="false"
                        title="Jump to 08:23 in this episode">08:23</a>)
                    <br>I would. me put on my producer hat.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=8m28s" data-turbo="false"
                        title="Jump to 08:28 in this episode">08:28</a>)
                    <br>For the audio listeners, he's wearing a hat that says merge loop on it.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=8m28s" data-turbo="false"
                        title="Jump to 08:28 in this episode">08:28</a>)
                    <br>If you go to...
                </p>

                <p>Yes, it's even got the little white logo on the back. Yes, so if you go to MergeLoop.dev, that's me,
                    that's the company name. From there you'll see the two products, autoload.dev, which is a filament
                    CMS, it's pretty simple to WordPress, and rapidSAS.dev, which is basically a SAS boilerplate, SAS
                    starter kit. It's got all the stuff you need to do products, one-time purchases, subscriptions.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=8m34s" data-turbo="false"
                        title="Jump to 08:34 in this episode">08:34</a>)
                    <br>nice.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=8m56s" data-turbo="false"
                        title="Jump to 08:56 in this episode">08:56</a>)
                    <br>yada yada yada, it's the niceties. It's all in a nice little convenient composer package.
                    Composer require, bing bing boom, you're done. Everything works as is. Producer hat off.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=9m7s" data-turbo="false"
                        title="Jump to 09:07 in this episode">09:07</a>)
                    <br>Sweet. So I want to talk about, so we've got a few topics on list this week. would like to just
                    talk about abstractions and API formats, like how to send it off. Personal sites, you mentioned, pan
                    with analytics. And so I'd love to crack into or talk with each one of these things.
                </p>

                <p>So one thing I wanted to talk about is abstractions. And we lean on best practices like reuse,
                    separation of concerns, maintainability. But there's a fine line between like hopeful abstraction
                    and over-engineering. And I see this often. And it's this tendency to take bits of code, even the
                    smallest pieces of logic. The first instinct is to put them in a service class or a helper.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=9m46s" data-turbo="false"
                        title="Jump to 09:46 in this episode">09:46</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=9m59s" data-turbo="false"
                        title="Jump to 09:59 in this episode">09:59</a>)
                    <br>repository pattern or other abstractions that just aren't necessary. And so one recent example
                    was like a third party API. And so I've seen it many times where the first thing they want to do is
                    include a service class. And then on top of that, they want to include a DTO for the response
                    handler.
                </p>

                <p>And some of these service classes, like when you, it'll pass along the token and set it up and which
                    is great, but like I've never, I've never have that exception useful. Like please provide a token in
                    your configuration or your environment. Like it's null you know, like the API is going to tell you
                    if it's null you know, or they overwrite the errors. I've seen this in some packages. They overwrite
                    the errors of like, if you get a response back,</p>

                <p>It'll be like open API, just throwing out an example. It'll be like error, error from open API, but
                    it doesn't actually tell you what the error came back from that API. just because of that
                    abstraction, it's, it's hiding that error. and I'll like, I'll like look into the method. they
                    logged it. Okay. Well then I have to go look in my log. And so, and see what the error actually was.
                    And so it, I find this often, but too many times, like too many times of</p>

                <p>where they're building it in a way like they're preparing for millions of requests just like right
                    away. And if that's your thing, you do know like you're gonna launch this thing immediately have
                    crazy traffic. Sure, there might be some, we would have a different conversation about this, but I'm
                    talking like this is base level. You have one endpoint and these crazy abstractions that are going
                    on. And I see this everywhere with Laravel with repository pattern.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=11m46s" data-turbo="false"
                        title="Jump to 11:46 in this episode">11:46</a>)
                    <br>Yes.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=11m46s" data-turbo="false"
                        title="Jump to 11:46 in this episode">11:46</a>)
                    <br>And just, yeah. And so it just adds a big layer of complexity and where if I have another
                    developer coming in to read this or some, or meet my, even myself coming back in the future, it's
                    really hard to read and maintain. And instead of simplifying it, this over-extraction can, can lead
                    to confusion and clutter. So do you run into this? Do you see this very often?
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=12m10s" data-turbo="false"
                        title="Jump to 12:10 in this episode">12:10</a>)
                    <br>I see this sometimes, not at the place that we work at because obviously we work pretty close
                    together and you don't do that and I don't do that. We're big refactors. Like I'd rather write it
                    really simple once. And then if a new request comes in for something new or like, we need to rework
                    this, then, you know, refactors what I would go to first. But like I've seen developers who will
                    write,
                </p>

                <p>an API call in a separate class, that API call may throw an error. They catch the error in, you know,
                    like in the controller where they're calling it, they catch that API error and then format their own
                    error that was like, oops, something went wrong. Like in the catch block of that try catch. So you
                    basically ignoring that class and ignoring that error and just throwing up an error of your own. And
                    I would just, I would just rather have it all in one file in my</p>

                <p>In my opinion, just because that gets like, have to go over here. Okay. That's where the API calls
                    comes over here. I'll catch us the error. it's another error. And then it's over here. but it's
                    just, it's, it's so much thinking and just me explaining that took, you know, 15 seconds. And if it
                    was just in five lines, I could, it is. I can read it. So yeah, not name of names, but I've, I've
                    seen that quite a bit.</p>

                <p>And it would, it would surprise you how often people will just, well, they'll write a third party API
                    service, catch the error and then format their own error on top of it in that service. It's like
                    wild.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=13m40s" data-turbo="false"
                        title="Jump to 13:40 in this episode">13:40</a>)
                    <br>Right.
                </p>

                <p>Yeah, a lot of it goes back to the concept of YAGNI Have you heard of this before? YAGNI</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=13m50s" data-turbo="false"
                        title="Jump to 13:50 in this episode">13:50</a>)
                    <br>is that that purple dress, blue dress thing? I'm kidding. I'm kidding, that's a different meme
                    where you look at it and it's the dress purple. Wasn't there a meme where it was like Yagney or
                    Yanni or whatever that is? Yeah, I was being a jokester there.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=14m0s" data-turbo="false"
                        title="Jump to 14:00 in this episode">14:00</a>)
                    <br>Yeah, yep. Yeah, yeah, yeah.
                </p>

                <p>No, that's good. Yeah, I remember that the purple dress thing. Yeah. So is it purple for you with
                    purple for me? Purple is gold, right? Purple and gold. Yeah.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=14m16s" data-turbo="false"
                        title="Jump to 14:16 in this episode">14:16</a>)
                    <br>It was, I think it was purple. but yes, I, I've, I, I know what you're talking about, but
                    continue.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=14m21s" data-turbo="false"
                        title="Jump to 14:21 in this episode">14:21</a>)
                    <br>So.
                </p>

                <p>Yeah, Yagny, the first time I heard from it was from Tighten And it's aren't going to need it. And
                    that's where this comes into play is this principle of Yagny. And it's like building for
                    hypothetical future needs. And so if like your interaction with this API, if it's straightforward
                    and limited to a few calls, why build an A abstraction layer now? Keep it simple until you need it,
                    you know?</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=14m51s" data-turbo="false"
                        title="Jump to 14:51 in this episode">14:51</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=14m54s" data-turbo="false"
                        title="Jump to 14:54 in this episode">14:54</a>)
                    <br>and not fighting the framework. That's a big thing of like any code that you're writing is stuff
                    you have to maintain. I think about this with Laravel, with Taylor, he's mentioned that like
                    anything that comes in the framework, he just has to assume that he's taking the maintainability of
                    that code. And so I think about that for my own projects too of like anything that I'm adding in on
                    top of the framework or on top of the code, that's something I have to maintain. If we're creating
                    this crazy abstraction for a
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=14m58s" data-turbo="false"
                        title="Jump to 14:58 in this episode">14:58</a>)
                    <br>shore.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=15m23s" data-turbo="false"
                        title="Jump to 15:23 in this episode">15:23</a>)
                    <br>one off API call. You're fighting the framework. It makes upgrades trickier. Many times when
                    rescuing apps who are looking at apps that's not very well tested, the abstraction. So if you
                    decided to rip it out, maybe these stumb abstraction, maybe the tests are integrated with these
                    abstractions. So it just creates a lot of noise. so Laravel already offers a lot of
                </p>

                <p>conventions for handling API. They have the HTTP facade client and you just write HTTP, and get
                    wherever the URL is and then you can call it right. that way, and if you just have one off API, make
                    one off call, just make it simple. It should be able to read like a book and straightforward. It
                    comes in a straightforward, clean way. It's readable, easy to maintain.</p>

                <p>And allows you more aligned with the framework and it's less code that you have to write. And there's
                    less room for bugs or maintenance headaches. And as other developers coming, looking in, they don't
                    have to like click into the method. And so, I think there's a compelling reason why, know, Laravel
                    doesn't have DTOs or there isn't some DTO package you hear of like, they'll use this. And DTOs, I
                    know it's a very minimal thing. It's just a programming concept, but.</p>

                <p>But more or less, you know, just always question when you start the abstraction, should I do this?
                    You know, and it's it's never it's not never abstract, but it's only when it's clearly needed or
                    it's clearly necessary. It's kind of like hiring, which that's a whole different topic. But when you
                    hire somebody, when you hire somebody, it should be like very obvious. We should have hired them
                    months ago. We should have done this and it should be kind of that way with a</p>

                <p>with abstractions, you know you have this coming big feature, now you're gonna refactor it and
                    because of your current needs, we're not gonna sit here and build a spaceship around our future
                    needs, know? So it's all about balance. I'm curious if you have similar, I think we're on the same
                    page here, but I don't know if you wanna be devil's advocate, tell me like why you should always
                    abstract, but that's just my personal beliefs.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=17m43s" data-turbo="false"
                        title="Jump to 17:43 in this episode">17:43</a>)
                    <br>Yeah, I can, the big one that I hear the most about trying to make something like reusable is
                    like that, what do they call it? It's the, like the dry principle, like don't repeat yourself. Like,
                    like if you have an external service, you might as well just throw that in like a wrapper class and
                    you could just call that class. now anytime you need to call that service, you call that class. But
                    like, if you're only going to call it once or for one thing, does it.
                </p>

                <p>Does it really need to have its own file and its own wrapper stuff? You could, you could just call it
                    inline. It works just the same. and it's still dry because that's the only instance of it ever being
                    there. But I don't know if I can play devil's advocate because I'm, I'm squarely in the camp of,
                    like if it's, if it, if it fits the need now, then it is readable and maintainable by not only you,
                    but say somebody else, then keep it as it is.</p>

                <p>But I start reaching for wrapper classes or abstracting out when it gets to like the second or the
                    third occurrence. Like if I need to call this API twice, I'll probably write it two separate times.
                    But if I need to call it a third time, it's like, maybe I'll just put that in a class with its own
                    little wrapper and I'll just call that class and that way it's the same everywhere else. yeah,
                    wouldn't let dry, dry is probably the most common thing that I see people saying like, just.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=19m11s" data-turbo="false"
                        title="Jump to 19:11 in this episode">19:11</a>)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=19m12s" data-turbo="false"
                        title="Jump to 19:12 in this episode">19:12</a>)
                    <br>Don't repeat yourself, put it in a class that way. It's always there. You call that class, you
                    call that, you know, that same little function code and it's the same throughout, but.
                </p>

                <p>personal preference I guess</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=19m24s" data-turbo="false"
                        title="Jump to 19:24 in this episode">19:24</a>)
                    <br>I have created abstractions, many abstractions, in the sense of perhaps you have a flaky API and
                    you want retries. Maybe it's, that might be more of job batch processing. I've done ones where it's,
                    the authentication token is dynamic based on the authenticated user. Like GitHub, example, you're
                    pulling a list of repositories. You're pulling it by that user, which ones they have permission to.
                    So I've used it that context where the...
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=19m43s" data-turbo="false"
                        title="Jump to 19:43 in this episode">19:43</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=19m53s" data-turbo="false"
                        title="Jump to 19:53 in this episode">19:53</a>)
                    <br>authentication token is dynamic or conditional logic like organizations that they belong to.
                    Maybe you want to flip it between which off, which user they're on by all means, you know, those
                    things where you have to kind of centralize that logic of where you have it in multiple places
                    across your app. Sure. You know, it's, but just be careful. I think it's the early on portion that
                    I'm particularly talking about here is like you're starting off. You have this new feature. Somebody
                    says, Hey, I want to connect to this API, pull these results.
                </p>

                <p>just this one-off API call can just be useful for the HTTP facade and you don't have to abstract it.
                    It's clear to read, understand. I can use one of my favorite things recently if you aren't going to
                    need it until I actually do, just by leveraging the framework.</p>

                <p>It really, you avoid the trap of over engineering and keep your code base clean, maintain, you know,
                    maintain for other developers.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=20m48s" data-turbo="false"
                        title="Jump to 20:48 in this episode">20:48</a>)
                    <br>Yeah, just don't waste your time up front. Like if it's gonna be a one-off thing, just write it
                    as a one-off thing. You've got more important things to do. You're already building an app and
                    you're at the first part where you're like, there's like seven steps I gotta get done to get this
                    app done. Just write it as it is. You can always come back later.
                </p>

                <p>don't abstract too early, it's not worth the time. Or the later headaches.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=21m12s" data-turbo="false"
                        title="Jump to 21:12 in this episode">21:12</a>)
                    <br>So speaking of abstractions and where you want to put things is this is something I've been
                    thinking about. And I don't think there's a right answer or a wrong answer really, but there's not a
                    definitive answer better. the expected API format, so let me kind of paint this picture for you.
                    You're setting up an API of an endpoint where you're not going to write some crazy abstraction for a
                    service class.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=21m41s" data-turbo="false"
                        title="Jump to 21:41 in this episode">21:41</a>)
                    <br>you
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=21m43s" data-turbo="false"
                        title="Jump to 21:43 in this episode">21:43</a>)
                    <br>Make a controller. You make this API call API. This API request has like a list of product
                    identifiers, right? So you do like product underscore ID. You can give it an array. We'll just do
                    products, right? Just we'll say a request of attribute of products and it's an array. You can pass
                    it as many products as you want. It's by ID. So this is like again, array of products.
                </p>

                <p>Then it runs through the validation. Validation asserts that products.start, right? It makes sure
                    that the product exists, goes through that format. So here's the catch. Here's where turn around and
                    you're gonna plug it into this API. You're gonna feed it into this API. This API format expects it
                    to be a comma-separated list. Right now it's an array. So you pipe it through the request. The
                    request comes out through the controller.</p>

                <p>has request arrow products, it's an array, or obviously can format to a collection, et cetera. So the
                    places you can put that format is either in the request, the form handler, where on its way out, can
                    do the, you can split it off there of like reformatting it, or when it reaches the controller, you
                    can do it at the top of the controller, like do some random thing in the top controller.</p>

                <p>or when you're actually plugging into the API. I just talked about abstractions, maybe when you make
                    a, when you, you know, do you format it there and call from abstractions that those in a trait. So
                    if, if this came your way, what would be kind of your, your first approach or what would be like
                    your, what would you lean for?</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=23m34s" data-turbo="false"
                        title="Jump to 23:34 in this episode">23:34</a>)
                    <br>I always like to put it all in the controller first. So if something comes in, I will literally
                    just write every single piece of logic that I can inside the controller. Yeah, I'm a fat controller
                    boy. I'm a fat controller boy, first and foremost. And then what I start doing is I'll start
                    abstracting it out to that request class, like I'll make a request class, and I'll put any functions
                    or methods that I want in there.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=23m46s" data-turbo="false"
                        title="Jump to 23:46 in this episode">23:46</a>)
                    <br>So you're a fact controller's guy.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=24m4s" data-turbo="false"
                        title="Jump to 24:04 in this episode">24:04</a>)
                    <br>So validation and then probably like a getter method, like, Hey, get products or, or, know,
                    arrow products. And then from there I can, I'll just copy paste my, you know, reformatting logic
                    into that request. So then my controller becomes skinny, right? Just request, arrow products. And
                    then now all the validation, all of the fat logic is now moved to the request class. That's, that's
                    usually where I stop.
                </p>

                <p>if that makes sense. yeah, I do fat controllers and then I put them on a diet and I make them skinny.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=24m42s" data-turbo="false"
                        title="Jump to 24:42 in this episode">24:42</a>)
                    <br>I like that. Yeah.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=24m44s" data-turbo="false"
                        title="Jump to 24:44 in this episode">24:44</a>)
                    <br>That's what I do. What did, is, was this like a specific request you got recently?
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=24m50s" data-turbo="false"
                        title="Jump to 24:50 in this episode">24:50</a>)
                    <br>not necessarily. Yeah. I was, I was working on, yeah, I was working on it like an API
                    integration where I was turning around and throwing it to a different, like I was getting an API
                    request or form requests and I was turning around and spinning it to a different API, to where in
                    their format that they expect. And so, where I was thinking there's just multiple ways that
                    different developers could approach this. I see, like you mentioned probably the most common way.
                    And I think that's through controllers.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=24m51s" data-turbo="false"
                        title="Jump to 24:51 in this episode">24:51</a>)
                    <br>for something like this with APIs.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=25m18s" data-turbo="false"
                        title="Jump to 25:18 in this episode">25:18</a>)
                    <br>Where I come from is a place of skinny controllers of like, or just skinny logic in general.
                    don't like, but the other thing is I don't like too many abstractions. And so I try to leverage the
                    framework as much as possible and Laravel in their form requests, they have this thing of, if you
                    write a custom form request, they have a method it's called passed validation. And so when a,
                </p>

                <p>when the form is passed validation, it will check if this method exists in your form request and then
                    run it. And so what you could do, you could do like a this, like a replace or this merge. And so
                    that works really well, but I found a quirk with it. And this is where I started questioning
                    everything. So this, if you do like this merge, and then I did the whole rigmarole where I did, I
                    did the collect, know, I put the array in there.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=25m55s" data-turbo="false"
                        title="Jump to 25:55 in this episode">25:55</a>)
                    <br>Okay.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=26m14s" data-turbo="false"
                        title="Jump to 26:14 in this episode">26:14</a>)
                    <br>then I did a comma separated list. So now it's a string, right? It's a comma separated string
                    once it has passed validation. But when you get back into your form request, wanna pass it to the
                    API of the values that I'm passing to the API are this validated instead of having to a break out
                    each individual thing, which again, skinny controllers, right?
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=26m20s" data-turbo="false"
                        title="Jump to 26:20 in this episode">26:20</a>)
                    <br>Mm-hmm. Mm-hmm.
                </p>

                <p>Mm-hmm.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=26m42s" data-turbo="false"
                        title="Jump to 26:42 in this episode">26:42</a>)
                    <br>So, I like the using this validate and just passing whatever, that was passed. But if I do this
                    validated, technically I get layer of all stance under, but technically under the hood, that's since
                    I merged it, or since I replaced it, that attribute is no longer validated. And so when I do this
                    validated that, that value is not there anymore. So then in my mind, I'm thinking, maybe I'll do
                    this all right.
                </p>

                <p>But then I started thinking, my mind goes, well, this all is dangerous. If you, you, you're going to
                    include some attributes that were not validated or, or, or something that was not in a request and
                    now it is. And so, and I think there's ways you can prevent like, undefined attributes in the
                    request, you know, to automatically fail them. But any who, so there's kind of that middle ground.
                    It's like, I thought about PR PRing this something to Laravel of like,</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=27m6s" data-turbo="false"
                        title="Jump to 27:06 in this episode">27:06</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=27m33s" data-turbo="false"
                        title="Jump to 27:33 in this episode">27:33</a>)
                    <br>yeah, I was trying to think of like this keyword of like what, what I could pass where it could
                    be a level PR of that I could do it. So there's something I've been toying around with. that way you
                    can get the, you can either get the
                </p>

                <p>attributes that are defined and pass the validation or and also you can get the ones that you you
                    changed or that you merged. Does that make sense? Going on a bit of a tangent, but.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=27m54s" data-turbo="false"
                        title="Jump to 27:54 in this episode">27:54</a>)
                    <br>I didn't know that that was a thing. I didn't know that there was an after validation hook you
                    could essentially get into and sort of manipulate some of that data.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=28m0s" data-turbo="false"
                        title="Jump to 28:00 in this episode">28:00</a>)
                    <br>Mm-hmm.
                </p>

                <p>Yeah, yeah, but then it's kind of broken right in the end because it's not just arrays, it's any
                    value. And so I gave the array example, but if you go to a string and you replace a string and then
                    you call later in the request, if you call request validated, it's not there anymore. Actually it is
                    there, but it's the original value. And so you're going to get like an array back or the old string.
                    So then that's where, but then you can't use request all because that's, you don't want to use
                    request all.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=28m10s" data-turbo="false"
                        title="Jump to 28:10 in this episode">28:10</a>)
                    <br>Yeah.
                </p>

                <p>Hmm.</p>

                <p>Yeah.</p>

                <p>Hmm.</p>

                <p>Let's bait it.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=28m36s" data-turbo="false"
                        title="Jump to 28:36 in this episode">28:36</a>)
                    <br>But then, so then you have to do the whole nasty thing of like, have to deconstructure their
                    array and spit it out into the request.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=28m38s" data-turbo="false"
                        title="Jump to 28:38 in this episode">28:38</a>)
                    <br>Hmm.
                </p>

                <p>Interesting. I would expect that behavior to, to work like you've, you've described it. Once it's
                    validated, if I change it, you know, on my side as the developer, that's how I want it to be right
                    after validation before, you know, an accessor or, know, calling, calling that requests. not all,
                    what did you say? Validated. Ooh. And naming that's going to be pain. Why is naming things so hard?
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=28m49s" data-turbo="false"
                        title="Jump to 28:49 in this episode">28:49</a>)
                    <br>Yeah.
                </p>

                <p>Yeah.</p>

                <p>Here's a, here's a.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=29m16s" data-turbo="false"
                        title="Jump to 29:16 in this episode">29:16</a>)
                    <br>I don't want to go on that tangent, but why is naming things so hard?
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=29m19s" data-turbo="false"
                        title="Jump to 29:19 in this episode">29:19</a>)
                    <br>I said, like I had a fire, like we were on the back patio and we had a fire going and I was just
                    thinking of these one word. So here's the, wrote them down in my notes. Here's a cleaned like
                    request cleaned or request processed, which, yeah. Or request cleansed request transformed. Yeah.
                    Yeah. I was just like, all these are dumb because all of them can are ambiguous. They don't, they
                </p>

                <p>that's like everything in Laravel, least in the validation request, it's very clear in what it does.
                    Like requests validated, obviously you're getting the attributes that are validated. Request all,
                    you get everything, right? But then when you, can't do something like validated with merge or
                    validated with, you know, change attributes. It's just so silly and it's not the Laravel way. And so
                    it's trying to come up with those creative class names. So yeah, maybe it might be good PR.</p>

                <p>feature, but that's right. It's kind of the old school thing of like, do think of a product, but you
                    get stuck on the domain ID or the product name, but the product, you know what that's going to be.
                    and I look through the PR docs and see like somebody reported this as a bug and, and rightfully so
                    like it's doing what it's supposed to do. You're when you call request validated, you're getting the
                    actually the validated things, not the ones that you replace or the ones that you merge. Makes
                    sense. Right. But I feel like there's some room in there, kind of a middle ground.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=30m28s" data-turbo="false"
                        title="Jump to 30:28 in this episode">30:28</a>)
                    <br>Yeah.
                </p>

                <p>Yeah. Yeah. Yeah.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=30m45s" data-turbo="false"
                        title="Jump to 30:45 in this episode">30:45</a>)
                    <br>Right, so yeah.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=30m47s" data-turbo="false"
                        title="Jump to 30:47 in this episode">30:47</a>)
                    <br>Yeah, even if it's just like a parameter you can pass to the validated function. Like I know you
                    can call validated and you could pull out specific keys, but I wonder if there's just like an extra
                    parameter you can give it like with merge, with whatever or something of that name or of that nature
                    where I have manipulated the data post validation and I want to get all of that data.
                </p>

                <p>Not all of the validated data. want all of the data after validation, after my changes, whatever,
                    after that hook. So yeah, I would consider that a bug. mean, that's not what I would expect it to
                    be, especially if it's a hook built into Laravel that's automatically called for me. should
                    automatically handle that sort of merging for me, if that makes sense. I shouldn't have to call
                    anything extra.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=31m40s" data-turbo="false"
                        title="Jump to 31:40 in this episode">31:40</a>)
                    <br>Right. Yeah. Yeah. Well, yeah. Cause I get the validated thing. Cause they're technically you
                    could write something that's not being validated. Cause you're not going to validate it again. Cause
                    that's dumb, you know, or cause the reform request does have something in there where you can do
                    something to the data before it validates. And if you use that and then it validates and then, then
                    it'll come out the right way. But then it's like, you can't, it's kind of ugly after it before that.
                    Right. Because then you can't do the,
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=31m53s" data-turbo="false"
                        title="Jump to 31:53 in this episode">31:53</a>)
                    <br>Uh-huh.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=32m10s" data-turbo="false"
                        title="Jump to 32:10 in this episode">32:10</a>)
                    <br>The like product dot star thing I was telling you about where it can actually form it can
                    actually check each array iteration and check if it's a Thing then you have to like write some weird
                    Weird code to like split those out and then check them individually gets ugly, right? so was
                    thinking like only if there is like an easy way to get both the the attributes that were changed and
                    that the attributes that were validated so Yeah, so something to think about
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=32m25s" data-turbo="false"
                        title="Jump to 32:25 in this episode">32:25</a>)
                    <br>Yeah.
                </p>

                <p>Mm-hmm.</p>

                <p>It kind of smells a little bit to me. I know that you and I talk about a lot of code smells. if a
                    code smells funky, there's something wacky there. And that smells a little to me as an Indiana boy
                    that smells. You can quote me on that.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=32m49s" data-turbo="false"
                        title="Jump to 32:49 in this episode">32:49</a>)
                    <br>Yeah. So yeah, I'm curious. If, yeah, if you think of a cool name like that, like, or listener
                    of the show, if you think of a cool name, or if you tell me this is a dumb idea, sure. But, but
                    yeah, there's, there's gotta be, gotta be some middle, middle ground there for sure.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=33m2s" data-turbo="false"
                        title="Jump to 33:02 in this episode">33:02</a>)
                    <br>Yeah.
                </p>

                <p>Now keep that to yourself.</p>

                <p>Yeah, because naming things suck. It took me two months to name the company Merge Loop. Two months.
                    And I refused to start building any of the products until I had the name because I was dumb.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=33m23s" data-turbo="false"
                        title="Jump to 33:23 in this episode">33:23</a>)
                    <br>I
                </p>

                <p>you have Merge Loop, which built the site there. I've been working a bit on my personal site, and I
                    want to talk about personal sites. And I know you have a site. I have a personal site. So mine is at
                    andyhinkle.com. Yours is at daltonmccleary.com.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=33m32s" data-turbo="false"
                        title="Jump to 33:32 in this episode">33:32</a>)
                    <br>Yeah.
                </p>

                <p>That's right.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=33m42s" data-turbo="false"
                        title="Jump to 33:42 in this episode">33:42</a>)
                    <br>So I did a refresh before it was just like
                </p>

                <p>hey, here's a little bit about me. that here's my social links, yada yada. That's it. But here in
                    recent months, I was like, you know, I. have opinions. So I created a blog. Then then I was like,
                    you know, we're, we're getting our opinions more public now. Thanks to Aaron Francis. So we started
                    the podcast. and so then it's like, well, you know, these things are coming up and I keep adding to
                    it and I.</p>

                <p>I've created it in a way like I've always wanted a personal site, but everyone's personal site, I
                    feel like it's neglected after like a couple of years, mostly because they're back on Laravel 6 and
                    you have to get it up to date, you know? And it's just like, well, I'll just create a new one or
                    something. Everyone that kind of neglects it because it's kind of a lot to maintain for just being
                    something, you know, it should be something so simple. So.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=34m19s" data-turbo="false"
                        title="Jump to 34:19 in this episode">34:19</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=34m39s" data-turbo="false"
                        title="Jump to 34:39 in this episode">34:39</a>)
                    <br>I I've refreshed my site. It's all it is. It's just a level app with tell when there's no
                    packages, like other packages install. There's no like spotty, like, packages or anything or, no
                    live wire or anything. It's just like, it's very straightforward. And, the way I am using folio. So
                    I use Laravel and Laravel folio is like the two main things. So, but I love it. Cause I can just
                    right click, like in my, it's our resources views pages.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=34m46s" data-turbo="false"
                        title="Jump to 34:46 in this episode">34:46</a>)
                    <br>Nice.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=35m8s" data-turbo="false"
                        title="Jump to 35:08 in this episode">35:08</a>)
                    <br>blog, I just right click and click new blade file and type in the name of the slug for my blog
                    post and start writing. And I usually just I have like a blog component and which just is the the
                    bread of the thing. And so and that has like some things you can pass like a header image or a
                    title, et cetera.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=35m28s" data-turbo="false"
                        title="Jump to 35:28 in this episode">35:28</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=35m29s" data-turbo="false"
                        title="Jump to 35:29 in this episode">35:29</a>)
                    <br>So I have that gone, it's like, just love how I can just like right click new file and start
                    writing. Same thing for like when we publish new podcast, I right click, hit the new file, type in
                    the slug for the podcast name. And then I'll change like the link for the show and the YouTube link
                    and it probably gets from there it pulls in. So I worked in with a few of background tasks.
                </p>

                <p>So when I create those, there's a background task that will pull in the transcripts. And so for, from
                    transistors, so we'll grab the transcripts and paste them in. So that way if people are searching
                    out for a particular topic or et cetera, they can find kind of what we're talking about in the show.
                    So, but how it works is like, like on the homepage, for example, like, know, I right click and click
                    new view file. How it works is it create, there's a component on the homepage that</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=36m12s" data-turbo="false"
                        title="Jump to 36:12 in this episode">36:12</a>)
                    <br>Clever.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=36m25s" data-turbo="false"
                        title="Jump to 36:25 in this episode">36:25</a>)
                    <br>pulls in by the date of the Windows created on my disk on the creation date. And it pulls in the
                    most recent three blog posts. So it's kind of flat file, right? It brings them all in and parses
                    through and it brings in the title and it brings in the first few lines of the description for like
                    a little preview on the homepage. Then it shows like recent talks and podcasts. Another thing I...
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=36m39s" data-turbo="false"
                        title="Jump to 36:39 in this episode">36:39</a>)
                    <br>Very.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=36m53s" data-turbo="false"
                        title="Jump to 36:53 in this episode">36:53</a>)
                    <br>I did was recent contributions. So it works with GitHub and it pulls in, I have a schedule that
                    runs daily. It pulls in anything like any public PR that I've done. And it just, it gives you like
                    the first five. Just, I was just thinking like what I've just, I was just trying to get people like,
                    here's what I've been thinking about. Here's what I've been talking about. And here's what I've been
                    working on. Yeah. So, just, just a little bit of, it's not, it's very minimal. It's, there's not a
                    lot going on to it, but.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=37m2s" data-turbo="false"
                        title="Jump to 37:02 in this episode">37:02</a>)
                    <br>No?
                </p>

                <p>Yes.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=37m23s" data-turbo="false"
                        title="Jump to 37:23 in this episode">37:23</a>)
                    <br>I like it from a maintainability standpoint. There's no abstractions, as I just talked about.
                    You literally right click, click new file. I'm doing any copy and pasting or anything like that.
                    It's very straightforward and it's very easy to maintain if Laravel bumps to 12 next year. Just bump
                    that version up and I don't have to upgrade a bunch of packages. I don't have to change a bunch of
                    stuff. It makes me get right back to work. And then when I have a thought about something neat, I
                    just go right back to the site.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=37m30s" data-turbo="false"
                        title="Jump to 37:30 in this episode">37:30</a>)
                    <br>Yeah
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=37m52s" data-turbo="false"
                        title="Jump to 37:52 in this episode">37:52</a>)
                    <br>or I click new file, you know, so. Yeah, man, I went long on that. yeah, so that's my personal
                    site. I know you have yours as well. And if, I don't know if you wanted to talk about what you think
                    about your personal site preferences and how you like to approach it.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=37m56s" data-turbo="false"
                        title="Jump to 37:56 in this episode">37:56</a>)
                    <br>Very clean.
                </p>

                <p>Yeah, I like, I like yours a lot. It's very clean. It's definitely very developer centric. Like it's
                    your site. You're the one maintaining it. So you don't need, you don't need a CMS, right? You don't,
                    you don't need any of these extra garbage things. And like you're smart enough to like, I'm just
                    going to do some fancy routing and file names. Bing bang. Boom. Laravel expert over here,
                    AndyHinkle.com. mine, mine isn't that clean. Unfortunately.</p>

                <p>I like to, every year I like to like refresh my site. So I usually let it sit for about a year and
                    then I'll come back to it with fresh eyes and like, I really want to do this thing or I really want
                    to try this technology or something. So I've, I've actually rebuilt my website a few times in
                    different languages. And I know that this podcast is really about Laravel development and this is
                    maybe sacrilegious for me to say, but my personal site's not built in Laravel, it's in.</p>

                <p>Next.js on Vercell. But I did that because it was free and I wanted to do some more JavaScript-y, bit
                    heavier on the animation things. The last time I had it, I had a video of me typing on a keyboard
                    and as you scroll down the video would play through like it does on Apple. I liked that a lot but it
                    made my website really heavy to use.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=39m10s" data-turbo="false"
                        title="Jump to 39:10 in this episode">39:10</a>)
                    <br>I love Next.js.
                </p>

                <p>I love that.</p>

                <p>Yeah.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=39m37s" data-turbo="false"
                        title="Jump to 39:37 in this episode">39:37</a>)
                    <br>That was actually built in Laravel. And then I was like, I'm going to slim it down. And I,
                    ironically, I did not slim it down. I actually set up sub domains. So I put in a sub domain router.
                    So I had like business dot Dalton McCleary at, you know, for, like freelancing stuff, I had music
                    dot Dalton McCleary and it had like an API link to my Spotify and all my most recent songs. I was
                    like, this is just insanity. So I scrapped that whole Laravel project.
                </p>

                <p>And I just rebuilt the fresh Next.js one using Tailwind's UI components. And I basically just pulled
                    all of that stuff and I put it on one page, one homepage. It's got a Spotify API so you can see what
                    songs I'm listening to. I've got a little spot of packages that I've worked on open source and these
                    paid packages. And just like a little blurb about me. And then I may or may not have copied Andy and
                    started a blog very similar to that where like there's no database because it's Next.js and I don't
                    want to</p>

                <p>pay for a database. I have to write it out manually. It's not smart enough to go, I'm going to go
                    pull all of the files in this directory and that's my blog post. So I have to basically make a new
                    entry, give it a date time, give it a path. And then in that path, I can write my blog content. But
                    now that I'm saying about it, it makes me want to rewrite it in Laravel because there are things
                    that I miss.</p>

                <p>I miss writing in Laravel from my personal site. Like man, I could just, I could do this so much
                    faster in Laravel than having to do it in Next.js. But my hosting's free and I don't wanna have to
                    pay for Laravel hosting. I know that the, I have Forge for the company and that's why I'm like, I
                    might rebuild my website for early next year and throw it on that Forge server. But I know that
                    there's,</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=41m6s" data-turbo="false"
                        title="Jump to 41:06 in this episode">41:06</a>)
                    <br>Yeah.
                </p>

                <p>You don't want to pay five bucks. Do play? Do you get forage yet?</p>

                <p>Drop it in. Yeah.</p>

                <p>Six dollars.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=41m32s" data-turbo="false"
                        title="Jump to 41:32 in this episode">41:32</a>)
                    <br>There's a way to do larval on Vercell. I can't remember who had that blog post. Maybe was Caleb
                    Porzio or somebody.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=41m40s" data-turbo="false"
                        title="Jump to 41:40 in this episode">41:40</a>)
                    <br>Yeah. Yeah. think you're right. Yeah. I think Caleb did that. Honestly, wait for cloud. That's
                    another option. So Laravel cloud. Yep. And so,
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=41m43s" data-turbo="false"
                        title="Jump to 41:43 in this episode">41:43</a>)
                    <br>who added, so I might try that.
                </p>

                <p>Hey, that's a great idea. That's a great idea. So I like yours a lot and I kind of want to rebuild
                    mine to be very slim and lean because now mine's gotten quite a bit bloated. I bought several
                    animation libraries and it's got just a bunch of junk in it, if I'm being honest. So I like to just
                    bend it and start over.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=42m11s" data-turbo="false"
                        title="Jump to 42:11 in this episode">42:11</a>)
                    <br>used to have that video, which video formats now are really like minimal. I remember like, you
                    know, a few years ago, videos would be really heavy on the web and Google really SEO wise, they
                    hated that. And, but recently like you can really get a, you can get like a good 10 second video
                    for, I don't know, 200 kilobytes probably. You can get it like really minimal these days. depending
                    on how many frames are in the video.
                </p>

                <p>But yeah, there's a lot of different options like WebM and stuff like that. So I think WebM is on the
                    way out. So but there's some other good options.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=42m46s" data-turbo="false"
                        title="Jump to 42:46 in this episode">42:46</a>)
                    <br>You know, I'm looking back at way back machine I was gonna try to find how far back that was
                    because I really did like that site or that that version of my personal site it just It was flashing
                    it didn't have content. It was basically just a fancy video scrolling animation like Apple does it
                    wasn't I Don't know. I saw that on Apple. I was like I want to do that. So I sort of made my own
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=43m4s" data-turbo="false"
                        title="Jump to 43:04 in this episode">43:04</a>)
                    <br>Yeah, I love that. And one of my favorite things is if you went view source or if you right
                    click and view that video in a new tab, you could hear yourself typing. It's just a little Easter
                    egg. So if you were to talk to or said something in the video, that was probably my favorite thing
                    is like if you went and actually watched the video and unmuted it, you could actually hear Dalton
                    type it away at his keyboard. So no, that was good. Yeah, it a little Easter egg.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=43m16s" data-turbo="false"
                        title="Jump to 43:16 in this episode">43:16</a>)
                    <br>whoops.
                </p>

                <p>Whoops. Maybe, maybe, maybe not look at that on the way back. Well, I'm glad I didn't have like music
                    blaring or, you know, talking to myself like a moron.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=43m36s" data-turbo="false"
                        title="Jump to 43:36 in this episode">43:36</a>)
                    <br>Yeah.
                </p>

                <p>Heavy metal? Yeah. Cool.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=43m43s" data-turbo="false"
                        title="Jump to 43:43 in this episode">43:43</a>)
                    <br>Yeah, I definitely want to rebuild mine to be more streamlined like you have yours because it's
                    kind of a pain for me to write a blog post. It's like three files after change.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=43m52s" data-turbo="false"
                        title="Jump to 43:52 in this episode">43:52</a>)
                    <br>just make it easy. Yeah, because you have to go back and edit your homepage.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=43m58s" data-turbo="false"
                        title="Jump to 43:58 in this episode">43:58</a>)
                    <br>Yep. And it kinda sucks.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=44m1s" data-turbo="false"
                        title="Jump to 44:01 in this episode">44:01</a>)
                    <br>Yeah. My thing is I didn't want to CMS. I didn't want a database. Like if I decided I win layer
                    of a cloud comes out, I'm definitely gonna move it over there and save probably six bucks, but who
                    cares, right? But I'm save a little money. But the reason I want to do that is because the staging
                    branches, they sound kind of fun if I get like a cool idea or something. And so I wanted to make it
                    minimal, no database. I didn't want to have to deal with the migration thing. So it just, just
                    files.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=44m13s" data-turbo="false"
                        title="Jump to 44:13 in this episode">44:13</a>)
                    <br>Hey, six bucks.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=44m29s" data-turbo="false"
                        title="Jump to 44:29 in this episode">44:29</a>)
                    <br>very much similar to Statamic in some ways, some context. I don't do any caching under the hood.
                    I don't do any page cache or anything like that. There's some room improvement for me in that
                    aspect, but it's pretty straightforward. Do a...
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=44m45s" data-turbo="false"
                        title="Jump to 44:45 in this episode">44:45</a>)
                    <br>Yeah, your site's already wicked fast. I know we talked about page caching or offline, you know,
                    we were slacking about it and I'm surprised you weren't because it was already wicked fast as it is.
                    I mean, it's just a flat file system, but I was impressed.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=44m54s" data-turbo="false"
                        title="Jump to 44:54 in this episode">44:54</a>)
                    <br>Mm-hmm.
                </p>

                <p>The actually the biggest files on the page now and I can't figure out how to do it is my when I
                    showed the GitHub contributions list, my recent contributions next to it, I have the organization
                    that came through them. So it'd be like a picture of it pulls in from the gap API. So it'll be like
                    a picture of Laravel's organization contentful. It's one of the CMS platforms we use. They're like
                    their icon they use. And it's like, it's like, I think like 1028 by 1028 and pixel size might be
                    smaller than that.</p>

                <p>but I can't figure out how to shrink that down without getting way too technical. I could probably
                    catch that or catch that image, process it on my server and make it smaller. But man, I just like, I
                    don't have that kind of time right now. Just my personal site. But that's probably the heaviest
                    thing on the site is those images coming through of their, and they're only like a couple of hundred
                    kilobytes here and there. So.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=45m56s" data-turbo="false"
                        title="Jump to 45:56 in this episode">45:56</a>)
                    <br>And that's the heaviest thing. Yeah, it's not worth installing spotty glade or something like
                    that and resizing them, optimizing them, and swapping them WebP and all that junk.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=45m58s" data-turbo="false"
                        title="Jump to 45:58 in this episode">45:58</a>)
                    <br>Yeah.
                </p>

                <p>Yeah, yeah, then I have to maintain. then, yeah, then you have to, sometimes you have to install
                    webmat or what you call magic, image magic, yeah, yeah. So do you have any analytics on your site?
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=46m12s" data-turbo="false"
                        title="Jump to 46:12 in this episode">46:12</a>)
                    <br>Yeah, image magic.
                </p>

                <p>Yeah, now we're in it.</p>

                <p>I have a lot of analytics on my side. I'm ashamed to tell you how many that I have because I know
                    that you don't have any. I've got GA4, I had Fathom, I've turned that off. I have heap analytics
                    now, so I guess only two. I only have two. I primarily use heap analytics. That's my go-to GA4
                    alternative. Big fan of that. But I know how much...</p>

                <p>analytics you have on your website. So mine is gonna, I've got two and you've got none. So I've got
                    one for both of us.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=46m50s" data-turbo="false"
                        title="Jump to 46:50 in this episode">46:50</a>)
                    <br>zero.
                </p>

                <p>It's one of my things of like anything I do in programming. I've talked about this on the show. think
                    a lot this or on this show, but the I think I talked about that a lot on this episode and that's
                    just I like things very minimal and I question everything. getting things to production as quick as
                    possible and shipping as fast as possible.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=47m9s" data-turbo="false"
                        title="Jump to 47:09 in this episode">47:09</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=47m14s" data-turbo="false"
                        title="Jump to 47:14 in this episode">47:14</a>)
                    <br>And so because of that, just, hate analytics platforms of anything. have to copy and paste a
                    script, like copy and paste this script into your header and we'll collect all your analytics. And
                    it's just like, I want it depending on how big their analytics platform is, they're going to slow
                    down your site with that script hit either to Google analytics or to wherever it's going to be. And
                    so, yeah, I don't have anything just because I, I
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=47m34s" data-turbo="false"
                        title="Jump to 47:34 in this episode">47:34</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=47m40s" data-turbo="false"
                        title="Jump to 47:40 in this episode">47:40</a>)
                    <br>I just hate the market right now. I've thought about something. I saw somebody in the Laravel
                    community, can't remember his name, but he did something really neat. that was like when he had a
                    middleware and it launched a background job to plausible, I think was the analytics platform. And
                    they just reused the API, but when you hit a link, would fire up background, like Laravel queue and
                    process and send that report over. that way it's things move very quickly on the front end. But then
                    I...
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=47m57s" data-turbo="false"
                        title="Jump to 47:57 in this episode">47:57</a>)
                    <br>Okay.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=48m9s" data-turbo="false"
                        title="Jump to 48:09 in this episode">48:09</a>)
                    <br>Can you, just, that thought where my mind goes is like, I can't imagine like waking up one day
                    and you have like a thousand jobs that are failing to fire in your queue on your personal site. It
                    just does not make like much sense to set up that way. So I'm like, well, you know, I don't want to
                    do some like weird background processing. That was, that would probably be the closest I'd get to
                    it. But then today Nuno from Laravel announced a pan PHP. So it's a, it's a, as he calls it, a
                    little analytics platform.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=48m33s" data-turbo="false"
                        title="Jump to 48:33 in this episode">48:33</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=48m39s" data-turbo="false"
                        title="Jump to 48:39 in this episode">48:39</a>)
                    <br>and or it's like a service that runs on your app. And it's not just for Laravel, right? There's
                    multiple adapters. It's around PHP, but then you can install it for different flavors. I imagine
                    there'll be more adapters in the future. But for right now, there's a Pan PHP. And just today,
                    somebody, I saw somebody post on Reddit a filament analytics widget for Pan. So people are already
                    doing stuff. Yeah, I know. was like, this thing just launched 12 hours ago.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=49m6s" data-turbo="false"
                        title="Jump to 49:06 in this episode">49:06</a>)
                    <br>fast.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=49m9s" data-turbo="false"
                        title="Jump to 49:09 in this episode">49:09</a>)
                    <br>So yeah, so anyway, the current process is how you would view it is you do like a data attribute
                    like data pan and they can hover over a link. I'm kind of curious how that works, right? I guess
                    there's some injected JavaScript. Have you seen it yet?
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=49m23s" data-turbo="false"
                        title="Jump to 49:23 in this episode">49:23</a>)
                    <br>I Yeah, I'm, I'm very curious. I, I installed it. So I saw it this morning and I installed it
                    on, on one of my product sites. Just so it could be running and collecting stuff. I haven't looked
                    at it yet. I don't think, I don't think I've had any traffic if I'm being honest with you, but I've,
                    I've installed it. I'm curious on how, on what is it? Cause it does clicks, hovers in impressions or
                    something like that. Right.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=49m50s" data-turbo="false"
                        title="Jump to 49:50 in this episode">49:50</a>)
                    <br>Yeah. Yeah. I think, yeah, you're right. Yep.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=49m51s" data-turbo="false"
                        title="Jump to 49:51 in this episode">49:51</a>)
                    <br>I'm curious about the impressions. is it tracking if it's in the viewport of somebody's screen?
                    Like somebody sees it and then somebody hovers over a button, somebody clicks a button. Yeah, I
                    don't have any traffic. I've installed it because I want to try it out. I want to see what it looks
                    like.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=50m8s" data-turbo="false"
                        title="Jump to 50:08 in this episode">50:08</a>)
                    <br>I'm curious how it works. I think it's injected JavaScript from PHP. They inject this little,
                    everything's minimal. so I imagine it's, I like it because it's privacy focused. That's one thing I
                    hate. Anytime you have to add a script, it's like, I have to abide. You have to abide by what they,
                    analytics platform service they wanna do. There's other platforms that are privacy focused, but I
                    try to find that line of,
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=50m13s" data-turbo="false"
                        title="Jump to 50:13 in this episode">50:13</a>)
                    <br>You must.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=50m37s" data-turbo="false"
                        title="Jump to 50:37 in this episode">50:37</a>)
                    <br>like good user experience where I'm not including a bunch of scripts. It's just you. Yeah. So,
                    and it just works. I really liked the idea of this. The fact that you can put data dash pan and like
                    a data attribute and then you could see your analytics. So I might check this out, see if it, see if
                    I like it at all. So.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=50m40s" data-turbo="false"
                        title="Jump to 50:40 in this episode">50:40</a>)
                    <br>Mm-hmm.
                </p>

                <p>Yeah, I was going to try to pull it up just on my local site and see if I can force a few things.
                    just in the meantime, I wanted to mention that I think that's like, just dawned on me that I think
                    that's why we work so well together, you and I, because I like to have fat controllers. I'll put in
                    like the least amount of effort possible to get something working. And then Andy loves to refactor
                    things and loves to simplify things and make them cleaner. So I'll give him fat controllers and
                    he'll just make them really lean.</p>

                <p>And really nice. And I was just thinking of that one subscription service site that we built. That's
                    basically how that entire site went was I did a lot of the backend, like heavy things. Andy did a
                    lot of the front end user registration and then came back through and we basically swapped and
                    cleaned up a bunch of this stuff, cleaned up a bunch of that stuff. I think that's why we work so
                    well together.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=51m42s" data-turbo="false"
                        title="Jump to 51:42 in this episode">51:42</a>)
                    <br>Mm hmm. Yeah. Did PR say?
                </p>

                <p>Yeah, there was many times where you'd come out the pull requests Mike, gosh, I like I think of
                    something that, you know, I would either put this like, there'd be like a method that's reused, not
                    put it in a trait or something. I'm like, gosh, don't just gonna hate this. I'm pretty much
                    rewriting, you know what he did. But then you're always very friendly in the responses. So I'm like,
                    I don't know, hopefully doesn't hate me after this.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=52m12s" data-turbo="false"
                        title="Jump to 52:12 in this episode">52:12</a>)
                    <br>It's no, it's, better. mean, I don't, I don't think we've ever argued about a PR before. I
                    can't, I can't think of a timer like Andy quit or this is dumb. Why are we doing this?
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=52m20s" data-turbo="false"
                        title="Jump to 52:20 in this episode">52:20</a>)
                    <br>No, it's always been, we're putting...
                </p>

                <p>I think, yeah, I always wonder that with some other developers because at least some of our other
                    developers on staff, you can tell they're kind of annoyed that I do things like in single quotes
                    instead of double quotes. I, know, anything I just try to run the, any project I'm on that does not
                    have styling rules in place, it bugs the crap out of me. So I implement some styling rules on their,
                    on this fresh new project I was added to it'd be like, I would install pint or something from
                    Laravel or piney tower, you say it. And then I would install the rules.</p>

                <p>or run it and do a PR and people will be like, why? You know, I'm just like, hey, it's just, I know
                    it's just styling, but hey, it helps me, am I reading through stuff? It's really helpful.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=53m3s" data-turbo="false"
                        title="Jump to 53:03 in this episode">53:03</a>)
                    <br>is what it is.
                </p>

                <p>Yeah.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=53m9s" data-turbo="false"
                        title="Jump to 53:09 in this episode">53:09</a>)
                    <br>You want to talk about securing assets? Or I'm sorry, did you have anything else on analytics?
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=53m15s" data-turbo="false"
                        title="Jump to 53:15 in this episode">53:15</a>)
                    <br>Yeah, I think I'm just, I poking it around. I'm still not quite sure how it works, but I assume
                    it's by page load because I have some, data pans at the bottom of my page, like for some facts
                    sections. And like if people are clicking the facts and those are at the, at the bottom of the page,
                    they're below the viewport. And so when I load the page, it still counts an impression towards those
                    facts, like openers.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=53m41s" data-turbo="false"
                        title="Jump to 53:41 in this episode">53:41</a>)
                    <br>Hmm. Mm-hmm.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=53m45s" data-turbo="false"
                        title="Jump to 53:45 in this episode">53:45</a>)
                    <br>but it might be a couple of bugs cause it's brand new this morning, but I hovered over a button
                    twice and I clicked it once. And now it says I only have one hover, two impressions, one click.
                </p>

                <p>So I don't know how it quite quantifies that. I would assume impressions would be if someone sees it
                    in the viewport, but that doesn't seem to be how it's actually working. So TBD on that.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=54m10s" data-turbo="false"
                        title="Jump to 54:10 in this episode">54:10</a>)
                    <br>Someone with, yeah, so somebody with pan, they're talking like they're replying in in the newest
                    replies about tracking like doing a B test with this. I thought it was kind of a fascinating idea of
                    like maybe there might be a community package or something that kind of merges pin it, which is
                    Laravel's feature flag package. And then something with, you know, with this analytic tracking to
                    maybe like, have like something, there's niceties in there to kind of track a B testing. There's
                </p>

                <p>We talked about A-B testing on the show before, I thought that was kind of a neat idea for a use case
                    for this. But again, I think it's more minimal. It's like stuff like for our personal sites, this is
                    a great example we should be putting on people like, do you know, maybe I'll do A-B testing. Like,
                    but it's built more for, you know, minimal approach.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=54m50s" data-turbo="false"
                        title="Jump to 54:50 in this episode">54:50</a>)
                    <br>Yeah.
                </p>

                <p>Yeah, I think I would, I would rather see a separate AB library that has its own little analytics
                    like this. Very simple, lightweight. I don't have to worry about GA4 or any of that garbage, but I
                    would like one that, you know, it tracks the impressions, it tracks the clicks, whatever, and just
                    whatever one of the AB test is doing better, just start waiting that one more until it just becomes
                    a hundred percent. Like I don't, I don't want to have to AB test, here's my window. And then at the
                    end of it, I have to look over the analytics and pick one. I can just, just do it for me.</p>

                <p>Like here's my A-B test, everybody's clicking A, obviously, so just stop serving people B altogether
                    for me. Just go ahead and just start waiting at that.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=55m37s" data-turbo="false"
                        title="Jump to 55:37 in this episode">55:37</a>)
                    <br>That's a.
                </p>

                <p>That's AI in about 10 years. Maybe less.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=55m42s" data-turbo="false"
                        title="Jump to 55:42 in this episode">55:42</a>)
                    <br>10 months probably or 10 days at the rate this is going
                </p>

                <p>but yeah, interesting little package.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=55m49s" data-turbo="false"
                        title="Jump to 55:49 in this episode">55:49</a>)
                    <br>So one thing you had on here, yeah, one thing you had on here was you wanted to talk about
                    securing Laravel assets.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=55m58s" data-turbo="false"
                        title="Jump to 55:58 in this episode">55:58</a>)
                    <br>Yeah, so I know we don't like to talk drama, whatever. And so I'll just briefly touch on it.
                    There was a new Wallpapers app from a popular YouTube creator. A lot of drama around it. And I found
                    a couple people talking about it on Twitter and this guy just found all of the unsecured high
                    resolution assets for this app just publicly available. You can just go download whatever you want.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=56m9s" data-turbo="false"
                        title="Jump to 56:09 in this episode">56:09</a>)
                    <br>I'm aware, yep.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=56m27s" data-turbo="false"
                        title="Jump to 56:27 in this episode">56:27</a>)
                    <br>You don't have to pay this creator. You don't have to download the app. Just here's all of the
                    URLs completely unsecured. Here's everything. Just download whatever you want. And in my head, I'm
                    like, that is the biggest security risk and probably the first thing that I would do if I was
                    building an app like this. Like if I'm selling a product, I want to make sure that nobody can access
                    that paid product without paying. And the fact that you could just get this entire creator's library
                    of
                </p>

                <p>paid assets for free just completely boggles my mind that the developer, whoever the developer was,
                    didn't think of securing their Google API storage link. And actually I'm gonna click on it to see if
                    it's still, yeah, see now it says access tonight. So when I added this topic late last week, it was
                    just publicly available. You just download whatever you want, had all the different sizes, all the
                    different resolutions. I was like, wow.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=57m11s" data-turbo="false"
                        title="Jump to 57:11 in this episode">57:11</a>)
                    <br>That says Google.
                </p>

                <p>Okay.</p>

                <p>Probably already exported, yeah.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=57m27s" data-turbo="false"
                        title="Jump to 57:27 in this episode">57:27</a>)
                    <br>You could spend $50 a year or you just, here's the link, here's everything. So I'm curious from
                    your point of view, because I know you use Vapor for quite a big client and they have a lot of
                    assets on S3. I'm curious your take on something like this happening because, wow.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=57m42s" data-turbo="false"
                        title="Jump to 57:42 in this episode">57:42</a>)
                    <br>Mm-hmm.
                </p>

                <p>Yeah.</p>

                <p>Yeah, yeah, yeah, for the client in particular, you mentioned they have, they're very, they're very
                    well known. can't say who they are, but they're very well known in the industry and they, people are
                    obviously poking holes trying to figure out what their next product is gonna be, what their next
                    thing is gonna be. see it a lot on social media. And so like, maybe this year they'll announce this,
                    that, you know, et cetera.</p>

                <p>So what I do on Vapor and S3 is I do signed URLs, so at least to the image assets. And so the first
                    thing is signed URLs. And what that does is it just generates a random hash on the image request and
                    runs through the middleware to determine if they can actually view it. particularly these are for
                    unreleased pages. So there might be</p>

                <p>administration role, yes, no, know, I'm boolean flag being able to see this particular product, you
                    know, just running through some flags there. So then we have, we have that. And then we have,
                    obviously if you can pass that, you get the direct link, which that kind of defeats the purpose of
                    signed URLs, right? I thought of going down the avenue of working with AWS to doing some pipeline
                    of, doing some crazy thing of determining if the user has access, you'd have to plug into like the
                    AWS APIs and stuff.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=58m49s" data-turbo="false"
                        title="Jump to 58:49 in this episode">58:49</a>)
                    <br>Hmm.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=59m13s" data-turbo="false"
                        title="Jump to 59:13 in this episode">59:13</a>)
                    <br>That's really complicated. so for what I've done in this one, I have the image, like the image,
                    what it's the name, the title of the file, and then it'll be underscore, and then it'll be like a
                    hash in there. And so that way it's kind of randomly generated. And I understand if that one image
                    gets out, it's that one image can be linked, or it can be leaked, if you will. And so...
                </p>

                <p>There's not really a foolproof way that I'm doing it honestly, if you really get down, if you're an
                    admin or you get admin roles and you get into this, you get into the application, it goes through
                    the middleware of the signed URL process. Now you have the actual S3 link. You can share that and
                    it's public. Then you just have to reroll it. So that's kind of...</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=59m44s" data-turbo="false"
                        title="Jump to 59:44 in this episode">59:44</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=1h0m9s" data-turbo="false"
                        title="Jump to 1:00:09 in this episode">1:00:09</a>)
                    <br>It's not the best, honestly, and there we have, we've had discussions on improving that, but
                    again, that's, have to go through a whole bunch of pipelines and AWS to set that up. At least what I
                    feel like. So, I don't know. Yeah. That's kind of my take on it that yeah, just sign URLs is kind of
                    the winner for that situation, but there are downfalls if you have, if it's on an external service
                    and you get the direct link. So, but I'm curious, yeah. What you, what you think on that?
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=1h0m35s" data-turbo="false"
                        title="Jump to 1:00:35 in this episode">1:00:35</a>)
                    <br>Yeah, I remember, it wasn't me, but there was a site that we, we also have different site who
                    uses S3. and they sort of published like a yearly booklet of like, here's, here's the new products
                    for the next year. And I remember a lot of stories from other developers that, work, work with us
                    like, yeah, people would just, you know, put in name of the flyer and then, know, the year like
                    2024.PDF
                </p>

                <p>Here's all of the unannounced products for the year 2024. And people are trying to put in 2025.
                    Here's all of next year's</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=1h1m7s" data-turbo="false"
                        title="Jump to 1:01:07 in this episode">1:01:07</a>)
                    <br>Yeah.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=1h1m11s" data-turbo="false"
                        title="Jump to 1:01:11 in this episode">1:01:11</a>)
                    <br>and we're like, that's, that's bad, right? That's real bad. And, and so I don't, think all we
                    did to solve it was just change the file name to something crazy right before it's released, you
                    know, just some random hash. people can't necessarily spoof it, but you could probably find it if,
                    if you try every single hash ever imaginable. So yeah, liked, I liked the signed URL routes.
                </p>

                <p>the most because it seems to be the easiest. It's basically just like a webhook secret almost. Like,
                    hey, you know, does the hash match? I don't think that there's a great solution to do. Obviously the
                    people that we're talking about have fixed it since I sort of put this topic on here because it's
                    not publicly available anymore. just to me, that seems like a massive, massive oversight for a paid
                    product of, you know, that.</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=1h2m4s" data-turbo="false"
                        title="Jump to 1:02:04 in this episode">1:02:04</a>)
                    <br>Yeah.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=1h2m9s" data-turbo="false"
                        title="Jump to 1:02:09 in this episode">1:02:09</a>)
                    <br>Calipers or millions of people downloading this can just bypass the payment for free if you just
                    know where to look.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=1h2m16s" data-turbo="false"
                        title="Jump to 1:02:16 in this episode">1:02:16</a>)
                    <br>Yeah, yeah, not trying to be like super like critical to the developers, but that's something
                    that would, least in my mind, that would definitely cross my mind of for protecting these products
                    and making sure that there are, you know, there are secure, like the images, you know, that they're
                    secure, they're not gonna be in a public leak or especially, it was always a directory, right? It a
                    whole directory or is it just?
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=1h2m39s" data-turbo="false"
                        title="Jump to 1:02:39 in this episode">1:02:39</a>)
                    <br>Yeah, the whole directory.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=1h2m41s" data-turbo="false"
                        title="Jump to 1:02:41 in this episode">1:02:41</a>)
                    <br>So yeah, that's directors, especially. never, I can't think of a timer I've had a director
                    accessible. It just, there's never been a reason. And so that's just, I think that's be the first
                    starters. That'd be, know, what you would want to do. but then yeah, after that, you might want to
                    figure out how to pipe, you know, you can do it through engine X and those configurations, how to
                    pipe your image assets through your application and run middleware to determine if they're
                    authenticated to view it off, et cetera. But then if you're on AWS.
                </p>

                <p>you're gonna have to hire some people or just get you kind of creative how you do it. So, you know,
                    one thing we're battling now actually is SEO on these images that are have the random hash on it
                    because it's like Google likes very clean file names. so, yeah, it's over. That's something to think
                    about as well. Like you might have this random hash. Statamic for example, is notorious for this.
                    Your entire file name is some random hash. so I tried actually attempted a PR for two Stamac Core
                    and it was unfortunately breaking.</p>

                <p>change. think they're going to take a look at it. I was trying to do something like where you have
                    file name then the hash. And so that was something they're thinking about. So anyway, yeah, not to
                    get off into a tangent, but yeah, there's multiple ways you can approach it. that yeah, assets is a
                    scary thing, especially if you're dealing with a big</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=1h3m59s" data-turbo="false"
                        title="Jump to 1:03:59 in this episode">1:03:59</a>)
                    <br>Very.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=1h4m1s" data-turbo="false"
                        title="Jump to 1:04:01 in this episode">1:04:01</a>)
                    <br>Now big clients where they people are constantly poking at URLs like, huh, if I increment this
                    from two to three, that worked. Wonder what four is going to do, you know, so,
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=1h4m12s" data-turbo="false"
                        title="Jump to 1:04:12 in this episode">1:04:12</a>)
                    <br>Yeah, somebody just take a bot and try all of your, all of the URLs now, right? Just like people
                    try and I'll see logs on my site where people are like, they're try, you know, slash WP admin just
                    to see if I have a WordPress site. And obviously if that passed, they're going to try a bunch of
                    other stuff. But yeah, I saw that and I was like, wow, of, you know, of that scale. And you know,
                    it's, since it's a digital product, once people download it, that's, that's it.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=1h4m21s" data-turbo="false"
                        title="Jump to 1:04:21 in this episode">1:04:21</a>)
                    <br>Mm-hmm.
                </p>

                <p>Mm-hmm.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=1h4m41s" data-turbo="false"
                        title="Jump to 1:04:41 in this episode">1:04:41</a>)
                    <br>Like you can't, you can't take it back from them. They've, they've got it. And especially if you
                    leak all of your assets, that's just, that's it. Like I don't, I don't obviously that they've
                    pivoted since then, but I, if looking back at this, I don't know how they would have pivoted. If
                    this, this sort of link was more widespread. I think it's, I think it was definitely contained to
                    sort of my, my sphere, my development sphere of Twitter X, whatever you call it. But.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=1h5m6s" data-turbo="false"
                        title="Jump to 1:05:06 in this episode">1:05:06</a>)
                    <br>Yeah.
                </p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=1h5m9s" data-turbo="false"
                        title="Jump to 1:05:09 in this episode">1:05:09</a>)
                    <br>I saw that and I was like, wow, I'm so glad that I don't work on that app because I would have
                    yanked all of my hair out if something that simple of securing your assets got that big of a leak.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=1h5m21s" data-turbo="false"
                        title="Jump to 1:05:21 in this episode">1:05:21</a>)
                    <br>Bye.
                </p>

                <p>There is another big one, did you see Zendesk? I'll keep it short, but yeah, Zendesk had one that was
                    just in recent days that was publicly announced. So Zendesk, it's ticketing software, it's where
                    people can write in, they get...</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=1h5m28s" data-turbo="false"
                        title="Jump to 1:05:28 in this episode">1:05:28</a>)
                    <br>Uh-uh.
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=1h5m43s" data-turbo="false"
                        title="Jump to 1:05:43 in this episode">1:05:43</a>)
                    <br>and you know, email back. So you write in to the service desk and they'll punch a reply back.
                    But a lot of the email addresses are generated by Zendesk. So it'll be like support plus one at.
                </p>

                <p>Agency.com or support out one company would increment from one to two so support at two etc so there
                    was a security thing of where Somebody could use like single sign on so they could get on like their
                    company slack type in support support plus three at company comm</p>

                <p>Trying to you have to being able to get into slack you have to be you know under the organization to
                    register etc so what they would do is that they would turn around and reply to that email address
                    like to the one that they they would get a Reply back and so they would guess the next increment
                    version of what they reply to I'm sure if you're holding up or if you catch me here, but they would
                </p>

                <p>they would be able to guess at the email address that the Slack would send a confirmation to and they
                    would send in a reply and then Zendesk would reply to them with the whole history and the email of
                    everything and it'll be like a confirmation from Slack or something. Yeah, it's wild. I'll post it
                    in the show notes. For those, I'll send it over to you. it was a pretty wild one. It made a lot of
                    headlines because they're the billion dollar company.</p>

                <p>Yeah, we use Zendesk or our clients use Zendesk. So, yep, pretty wild.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=1h7m19s" data-turbo="false"
                        title="Jump to 1:07:19 in this episode">1:07:19</a>)
                    <br>Spices so just make sure to secure everything The public cannot be trusted Validate everything
                    that should be Well known at this point never trust anybody
                </p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=1h7m26s" data-turbo="false"
                        title="Jump to 1:07:26 in this episode">1:07:26</a>)
                    <br>Yeah, for sure.
                </p>

                <p>Yeah.</p>

                <p>Alright man, it's been good. I've had some good discussion, good talks. And yeah, if you're still
                    here, thanks for listening. Or I'm sorry, one of the two.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=1h7m34s" data-turbo="false"
                        title="Jump to 1:07:34 in this episode">1:07:34</a>)
                    <br>Thank you.
                </p>

                <p>Yes.</p>

                <p>Yes, please please and thanks share this around messages whatever we're here</p>

                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/b999fe13#t=1h7m44s" data-turbo="false"
                        title="Jump to 1:07:44 in this episode">1:07:44</a>)
                    <br>and
                </p>

                <p>Dalton you wanna close this out? Making his tradition.</p>

                <p>Dalton McCleery (<a href="https://share.transistor.fm/s/b999fe13#t=1h7m53s" data-turbo="false"
                        title="Jump to 1:07:53 in this episode">1:07:53</a>)
                    <br>Yes. Yes, I do. I do. Hey, I'll, I'll, I'll close it out. You open it. All right, everybody.
                    Thanks for listening to another episode of the Midwest artisan that has been Andy. You can find him
                    on Twitter. You can find him at Andyinkle.com. My name is Dalton. You find me on Twitter,
                    DaltonMcCleary.com. We will see you guys next week. Bye.
                </p>
            </section>
        </div>
</x-app>
