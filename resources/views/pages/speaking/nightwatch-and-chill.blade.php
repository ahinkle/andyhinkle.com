<x-app>
    <x-slot name="seo">
        <title>Nightwatch and Chill</title>
        <meta name="description"
            content="In this episode of Midwest Artisan, we discuss Laravel Nightwatch, Instantiating a class via constructor property promotion, DTOs, and practical AI features in Laravel apps.">
        <meta property="og:title" content="Nightwatch and Chill">
        <meta property="og:description"
            content="In this episode of Midwest Artisan, we discuss Laravel Nightwatch, Instantiating a class via constructor property promotion, DTOs, and practical AI features in Laravel apps.">

        <script type="application/ld+json">
            {
            "@context": "https://schema.org/",
            "@type": "PodcastEpisode",
            "url": "https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill",
            "name": "Nightwatch and Chill",
            "datePublished": "2024-11-26",
            "timeRequired": "PT57M11S",
            episodeNumber: "10",
            "description": "We cover the launch of Caleb’s Flux UI component library, and dive into the benefits of mocking APIs locally for faster development. We also highlight Aaron Francis’ new Postgres course, and wrap things up with the web dev battle YouTube channel and how a foodie app we built, QuizKnows, played a role in landing our first jobs.",
            "associatedMedia": {
                "@type": "MediaObject",
                "embedUrl": "https://www.youtube.com/watch?v=XjS7WNih0_U"
            },
            "publisher": {
                "@type": "Organization",
                "name": "The Midwest Artisan",
                "url": "https://the-midwest-artisan.transistor.fm"
            }
        </script>
    </x-slot>

    <p class="py-2 text-center font-sans text-sm text-white/75">November 26, 2024</p>
    <h1 class="text-center font-sans text-3xl font-bold text-white md:text-5xl">Nightwatch and Chill</h1>

    <div class="mx-auto mt-8 max-w-3xl">
        <div class="px-4 pb-10">
            <iframe width="100%" height="180" frameborder="no" scrolling="no" seamless=""
                src="https://share.transistor.fm/e/36cfcb9a?color=1F2937&background=101827"></iframe>
        </div>

        <div class="prose prose-lg px-4 dark:prose-invert">
            <div>In this episode of Midwest Artisan, we discuss Laravel Nightwatch, Instantiating a class via
                constructor property promotion, DTOs, and practical AI features in Laravel apps.
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
            <div class="site-content-text site-episode-show-notes">

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=0m0s"
                        data-turbo="false" title="Jump to 00:00 in this episode">00:00</a>)
                    <br>Welcome to another episode of The Midwest Artisan. I'm your host, Andy Hingle.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=0m5s"
                        data-turbo="false" title="Jump to 00:05 in this episode">00:05</a>)
                    <br>And I'm your cohost Dalton McCleary.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=0m8s"
                        data-turbo="false" title="Jump to 00:08 in this episode">00:08</a>)
                    <br>Dalton. Laravel built the thing. They built the thing.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=0m10s"
                        data-turbo="false" title="Jump to 00:10 in this episode">00:10</a>)
                    <br>Yes.
                </p>

                <p>Yup, they heard you. Or you heard them. I don't know if you're secret spy in Laravel or not, but...
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=0m16s"
                        data-turbo="false" title="Jump to 00:16 in this episode">00:16</a>)
                    <br>What?
                </p>

                <p>No, yeah, I don't have any underlying. I have a lot of contacts there talk to them, but there was
                    nothing that I knew of that, you know, some secret information. But personally, I'm very excited
                    about this. And this has had been like a personal journey for me to get logging to a great point.
                    We've been we've been come to the trenches of understanding a problem between our apps together, of
                    trying to surface the how to even replicate.</p>

                <p>to write a test for it or to how to understand how they got there. So we've gotten very excited about
                    Laravel Nightwatch. If you haven't seen it, I'm sure you might be living under a rock. So
                    nightwatch.laraval.com. Yeah, LareconAU, Jess Archer did a great talk there covering in full, but is
                    essentially monitoring full service for your Laravel app.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=1m4s"
                        data-turbo="false" title="Jump to 01:04 in this episode">01:04</a>)
                    <br>and listen to the Rogue Podcast.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=1m19s"
                        data-turbo="false" title="Jump to 01:19 in this episode">01:19</a>)
                    <br>And I've been really curious on implementation, how they collect data. And on the recent version
                    of the layer of a podcast, they kind of covered that with Mount Stauffer. So I'll link that in show
                    notes. Where Jess Archer says they have a process in the background of that will group in batches
                    like your requests. that was really handy. So it's nothing like on the fly or live requests or
                    nothing that really impacts the server.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=1m26s"
                        data-turbo="false" title="Jump to 01:26 in this episode">01:26</a>)
                    <br>Yep.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=1m46s"
                        data-turbo="false" title="Jump to 01:46 in this episode">01:46</a>)
                    <br>So it's a process that lives outside of your application, which is really nice. Kind of similar
                    to how like Blackfire, if you ever use that works, it just kind of listens on the surface to
                    everything that's happening. I've been kind of curious with a digital ocean. Obviously this will be
                    the background process, but something like vapor and AWS, that will be kind of tricky.
                </p>

                <p>They kind of touched on that podcast, they'll mostly be this background process, but I'm curious on
                    Vapor how they're going to do that. For example, on Vapor, when you generate PDFs, we have a thing
                    that takes screenshots of the site, hides the footer, hides the header, and just takes screenshots
                    of the content, generates PDF. That is really tricky to do in Vapor because it's all headless and
                </p>

                <p>like more serverless, excuse me, but the actual generating, like being able to generate a browser to
                    take the screenshots, we have to use a Aaron Francis package. It's called Sidecar and just like it
                    basically attaches to vapor and creates pdfs us that way. So not to get too much on a tangent, but
                    where I was going with this is like with Nightwatch, I'm kind of curious what they're going to do
                    with vapor because vapor is just a different animal, different beast of how to handle that. So.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=3m11s"
                        data-turbo="false" title="Jump to 03:11 in this episode">03:11</a>)
                    <br>Yep.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=3m12s"
                        data-turbo="false" title="Jump to 03:12 in this episode">03:12</a>)
                    <br>Yeah, Curious, so your thoughts of Nightwatch and did you watch this presentation?
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=3m18s"
                        data-turbo="false" title="Jump to 03:18 in this episode">03:18</a>)
                    <br>I did get a chance to watch the Jess Archer and I guess Taylor's thing after the fact. I watched
                    it on, on the, on YouTube. and yeah, it's, it's basically what you were describing months or not
                    even months ago. Like I'm pretty sure you've had this idea since last laracon When we were talking
                    after, after Aaron's talk, the very last start of the second day, you're like, man, we need to build
                    like this.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=3m37s"
                        data-turbo="false" title="Jump to 03:37 in this episode">03:37</a>)
                    <br>Mm-hmm. Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=3m45s"
                        data-turbo="false" title="Jump to 03:45 in this episode">03:45</a>)
                    <br>At that point it was like form logs like how do you how do you track form errors? Across you
                    know a bunch of forms and that sort of ballooned into well, let's just let's just track everything.
                    Why aren't why aren't we doing that? So this looks like a very fancy Agency built version of what
                    you were talking about like almost word-for-word and it looks nice. It's it's fast It's exactly what
                    I assumed it was gonna be some third-party, know century esque thing
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=3m48s"
                        data-turbo="false" title="Jump to 03:48 in this episode">03:48</a>)
                    <br>Hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=4m13s"
                        data-turbo="false" title="Jump to 04:13 in this episode">04:13</a>)
                    <br>curious what the price is going to be for it. I know that they're trying to do the pricing
                    structure for cloud, but I'm very curious because big sites, there's a big site that you work on
                    pretty consistently that I assume would balloon any data storage of logs or errors or specific user
                    logs and stuff. So I'm very curious what their pricing structure is going to be for storage, if that
                    makes sense.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=4m30s"
                        data-turbo="false" title="Jump to 04:30 in this episode">04:30</a>)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=4m40s"
                        data-turbo="false" title="Jump to 04:40 in this episode">04:40</a>)
                    <br>That's probably where it'd make a break for me if I was gonna use it or not. Or pitch it to a
                    client to use. Like if it's less than $10 a month, that's not bad. But if we're talking like $5
                    extra for a gig, there are some clients that we use that would probably chew through that amount of
                    data in a month or a week or something like that.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=4m40s"
                        data-turbo="false" title="Jump to 04:40 in this episode">04:40</a>)
                    <br>Yeah.
                </p>

                <p>Yeah, definitely.</p>

                <p>Mm.</p>

                <p>Yeah, some of the big clients I work with, at least the main one that I'll be using, I can't wait to
                    use this on. I don't think they'll have too many problems. Like if I said, hey, we're gonna have
                    maybe a couple hundred dollars, if that tops. think just depending on the client, I think for those
                    smaller clients, like you mentioned, they might be kind of fussy if they get some higher website
                    traffic than normal. And also they like to know the exact dollar amount</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=5m17s"
                        data-turbo="false" title="Jump to 05:17 in this episode">05:17</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=5m29s"
                        data-turbo="false" title="Jump to 05:29 in this episode">05:29</a>)
                    <br>they're going to be expecting on their on their bills that's why we kind of favor DigitalOcean
                    versus something like Vapor or AWS so it might be kind of hard with this fluent pricing to get them
                    to sign on but I still think it'll be fairly affordable knowing Laravel they seem to be developer
                    first at least with the cloud and then with this now of they're gonna make it as affordable as
                    possible development wise on cloud and I kind of think the same thing might be happening over at
                    Nightwatch but
                </p>

                <p>it'll be really interesting to see pricing and where that goes. I'm currently doing this now on
                    CloudWatch, AWS CloudWatch. And the fact with Nightwatch, you can, there's a lot of watches going on
                    by the way, CloudWatch, Nightwatch. They're all named similar, but yeah, but beautiful application
                    that they put together.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=6m5s"
                        data-turbo="false" title="Jump to 06:05 in this episode">06:05</a>)
                    <br>Mm-hmm.
                </p>

                <p>You gotta get that keyword in there, man.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=6m22s"
                        data-turbo="false" title="Jump to 06:22 in this episode">06:22</a>)
                    <br>But in CloudWatch, it's very clunky, just AWS centric. Anytime you go on AWS console,
                    everything's clunky. It's kind of hard to find things. So built out this dashboard that has
                    exceptions tracking. We have a really rich logging system with context. And so I have to go and
                    write in, I forget the name of it, but it's like AWS is querying language they have in CloudWatch to
                    look up something. And it's very complicated just to look up if context
                </p>

                <p>is this ID or if order ID is this. It's very, very complex. you and the fact that in nightwatch you
                    can click a user or surface to an email address and I'll tell you all the requests, any exceptions
                    they've got and doing that in cloud watch, you can do it, but it's you're gonna really have your
                    cutout, your work cut out for you of getting that where it should be. And I feel like I'm only a
                    quarter away of where I want it to be. And nightwatch is the</p>

                <p>all that way plus more includes like jobs and everything else that I really didn't that it was kind
                    of like yeah maybe someday but you know jobs is they're fine for what we have it but just having it
                    there and readily available it is so cool.</p>

                <p>So really excited to see it and it's one thing obviously to just see it, the demo, the demo is just
                    amazing, just like all the data set they have, but then another to actually use it. So I really hope
                    it lives up to it and knowing the Laravel team and everything behind all the team that they have
                    behind there, I feel like it's gonna be a great product. So it'll be really interesting.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=7m59s"
                        data-turbo="false" title="Jump to 07:59 in this episode">07:59</a>)
                    <br>Yeah, I, I've used this analogy before when talking to other developers, feel like Laravel is
                    really leaning into that Apple mentality. Like whenever people ask me what's the difference between
                    Laravel and Symphony, I always like to say that Laravel was Apple and Symphony was Android. And I
                    think they're really leaning into that Apple. Like they're sweating all the small details.
                    Everything's thought about. It looks just absolutely insanely gorgeous.
                </p>

                <p>Like I don't know how they can go wrong with the team that they have there. It just, looks great. The
                    only thing that's holding me up is the pricing. You announce the pricing and I'm in. I mean, I'm
                    already joined the wait list, I assume you as well. But they're really, they're really leaning into
                    that Apple stuff and I love it.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=8m38s"
                        data-turbo="false" title="Jump to 08:38 in this episode">08:38</a>)
                    <br>Yeah. Yeah.
                </p>

                <p>even Taylor with this presentation, he does it like Tim Cook style. He'll come out and say, hey, this
                    is what we've done for the previous year. Next coming up, Jess Archer. And then he'll come back out
                    the end of that thing and just kind of plays that CEO ownership. I love that you kind of compared
                    the Apple centric. I've heard a little bit about that, but the way you said that was great.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=8m50s"
                        data-turbo="false" title="Jump to 08:50 in this episode">08:50</a>)
                    <br>Exactly.
                </p>

                <p>Mm-hmm.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=9m9s"
                        data-turbo="false" title="Jump to 09:09 in this episode">09:09</a>)
                    <br>yeah it's just everything's clean everything's you know exactly what to expect and that's how
                    Apple works and so it's really cool. I wanted to talk about I put out a thing on Blue Sky which by
                    the way if you haven't joined Blue Sky already I saw you join so but you definitely if you have not
                    you should everyone from Twitter seems to be going over there.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=9m30s"
                        data-turbo="false" title="Jump to 09:30 in this episode">09:30</a>)
                    <br>I literally just joined like Friday. You, I think you sent me this, this particular thing that
                    we're about to talk about on blue sky. And I was like, all right, well if Andy's on there and he's
                    posting stuff and getting good answers, I might as well join as well. So you should.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=9m43s"
                        data-turbo="false" title="Jump to 09:43 in this episode">09:43</a>)
                    <br>Yeah, well, I was kind of surprised of like, I just joined Blue Sky a while ago and then Justin
                    Jackson was like, he's all about Blue Sky now.
                </p>

                <p>And so, and then all of sudden he put me in his Laravel list and that just like that. just happened
                    to log in blues guy the other day. was like 500 followers. I'm like, what? I don't even post it
                    anything. So, and so yeah, it just kind of ballooned from there. And, yeah, I really like it just
                    because it feels like.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=10m6s"
                        data-turbo="false" title="Jump to 10:06 in this episode">10:06</a>)
                    <br>Yeah.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=10m14s"
                        data-turbo="false" title="Jump to 10:14 in this episode">10:14</a>)
                    <br>2010 Twitter of there's there's no ads at least of what I've seen may just be my ad blocker But
                    I haven't seen the ads everything's pretty straightforward it like yeah, you're following lists
                    You're not getting politics like at least very much crap of the honor feed. It's great But anyway, I
                    don't get tangent blue sky, but it's great, but I posted this question I've been doing like if I
                    post something on Twitter I post on blue sky just to see and I can by far getting a lot more
                    Conversation out of blue sky and so that's where that's what I'm liking more about it. But
                </p>

                <p>constructor property promotion, and but setting it with a class. for example, if you do like public
                    carbon date, and then it just automatically creates like a public carbon instance, or you do public
                    carbon talking in</p>

                <p>Code on a podcast is not helpful by the way, but doing something like...</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=11m5s"
                        data-turbo="false" title="Jump to 11:05 in this episode">11:05</a>)
                    <br>It's quite difficult.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=11m8s"
                        data-turbo="false" title="Jump to 11:08 in this episode">11:08</a>)
                    <br>But we're doing, just thinking like you have a new class and at the top you want to write like a
                    property and just do like public carbon date equals new date, new carbon and then the date you want
                    to give it to. And so I trying to figure out some way to do this because what was happening, I was
                    writing like public carbon date at the top and then in my constructor I was writing, inside the
                    constructor I was writing again like this date equals new carbon. And of course there's the property
                    promotion thing where you can give it
                </p>

                <p>But you still have to in the constructor you still have to like hey new carbon and I was like there's
                    got to be some way to do this of like where we can Do like an instantiation on the property
                    declaration like so when we set it up We don't have to write it twice or don't have to write inside
                    the constructor. It just works so Travis Northcutt, which I did meet at laracon comp I don't know if
                    he remembers me because it was very like in passing. Maybe so we haven't really had the conversation
                    about that yet, but it was like We kind of entered it was kind of in a group setting</p>

                <p>But he replied saying he was kind of trying back and forth and he was asking me if I could do it and
                    they construct a promotion. So basically you write public function construct.</p>

                <p>then the properties will be inside the constructor, the opening, would be public carbon start date.
                    But then we found out if you type into it, it would not work. So we just kind of went back and forth
                    and he eventually, like he figured out and I moved on to something else because I was like, I
                    couldn't figure this out. Maybe it's just not possible. So I went on to something else and that just
                    happened to on Blue Sky later, like, he figured it out. And so he wrote a blog post on it and...</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=12m39s"
                        data-turbo="false" title="Jump to 12:39 in this episode">12:39</a>)
                    <br>You
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=12m47s"
                        data-turbo="false" title="Jump to 12:47 in this episode">12:47</a>)
                    <br>which we'll link in the show notes. But if you write public construct.
                </p>

                <p>and then open right and for a new public property and you can do so public function construct then
                    inside their public date equals new carbon and you can pass in your carbon object and inside there
                    you do have to call the constructor you had the parent constructing or you get enough you get an
                    exception but I did not know you could do that and so I remember messing out to you before all that
                    I said do you know how to do this and right we kind of back and forth I was like wait maybe we found
                    it but the tricky thing is is you can't</p>

                <p>not type hint it. If you do it, it'll re-initiate the new object. it'll, like if you pass in your new
                    carbon and then open parentheses the date that you want, it'll just go for a blank new carbon
                    object. So, so you can't type hint it, but it's, we could just do public start date new carbon. So
                    I'm like, this is great. I might do reaching for this a lot more. So.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=13m46s"
                        data-turbo="false" title="Jump to 13:46 in this episode">13:46</a>)
                    <br>All right. Yeah. I don't, I like it a lot. The type hinting is kind of a smell to me really want
                    the best of both worlds. like dates and I've tried to do this with like collections as well, like
                    Laravel collections and it doesn't work. And it, and it always bugged me so much that you always had
                    to put like specific types.
                </p>

                <p>in the constructor and you can have other types like strings, arrays, whatever as just properties up
                    there or in the declaration and it's fine. Why doesn't datetimes do that? Why don't collections do
                    that? And so it's weird that this workaround is basically just circumventing PHPs.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=14m18s"
                        data-turbo="false" title="Jump to 14:18 in this episode">14:18</a>)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=14m24s"
                        data-turbo="false" title="Jump to 14:24 in this episode">14:24</a>)
                    <br>they do that constructor call where they're just instigating a new version of this and instead
                    of giving it the default value, they just don't give it any value unless you just don't type into
                    it. that's, I'm curious how long it took him to figure that out because that just seems like such a
                    backwards way of thinking about trying to do this that you just, have to, it's counterintuitive to
                    what you think it would be, but it works. It's impressive if I'm being honest.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=14m43s"
                        data-turbo="false" title="Jump to 14:43 in this episode">14:43</a>)
                    <br>Right.
                </p>

                <p>Yeah.</p>

                <p>He posted the blog post and then Joe Tannenbaum, he works at Laravel, he replied like, yeah, I didn't
                    know you could do that. So I was like, shoot,</p>

                <p>this is where I kind of started that conversation. Like is this, are you supposed to do this?
                    Probably not. Maybe that's cool. But eventually I think as a language we should get there where we
                    can type hint in the constructor of what we're going to go where we want to do. So we don't have
                    type it twice. So it goes back to my thing. I might, I question everything. Like every line I'm
                    like, is this, cause every line you're adding to the code base is something you have to maintain and
                    you're fighting the framework with your own business object, which is fine. But you really should
                    question</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=15m11s"
                        data-turbo="false" title="Jump to 15:11 in this episode">15:11</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=15m29s"
                        data-turbo="false" title="Jump to 15:29 in this episode">15:29</a>)
                    <br>Is this really needed? Should we utilize our framework tools that we already have for us? So
                    that just kind of goes back to that. And that's where all that started. like, is there a way to do
                    this? Or it was kind of a wishlist post and something, and just to see someone's like, yeah, you can
                    do that. That was just really cool.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=15m44s"
                        data-turbo="false" title="Jump to 15:44 in this episode">15:44</a>)
                    <br>Yeah, I agree. And I think PHP is, should get there at some point. Like the fact that for years
                    I've been writing like a new class instance. Like if I just want to declare a new class and call a
                    method on it in like one line, you always had to wrap the new, you know, class name in parentheses
                    and then pass your method or whatever to it. And an 8.4, you don't have to do that anymore. You can
                    just write new class and then just immediately chain your method call. I have a feeling or I have a
                    hope.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=16m8s"
                        data-turbo="false" title="Jump to 16:08 in this episode">16:08</a>)
                    <br>Mm-hmm, yeah.
                </p>

                <p>Yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=16m14s"
                        data-turbo="false" title="Jump to 16:14 in this episode">16:14</a>)
                    <br>that PHP like 85, 86 something or whatever does what you're describing and just lets you do
                    public carbon, know, date equals today or whatever. And it just works out of the box. I'm really,
                    really hopeful because yeah, like that would just be, that would be a very Apple approach for PHP to
                    do as a language. So I'm really hoping. I'm really, really hoping.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=16m27s"
                        data-turbo="false" title="Jump to 16:27 in this episode">16:27</a>)
                    <br>yeah, like the little helper today? Yeah, that'd be sick.
                </p>

                <p>It'd be a...</p>

                <p>It'd be cool to at least just see the parent constructor go away. Cause one thing you have to do to
                    make this work is you have to write that stupid like parent, colon, colon, construct, which in every
                    code of view, I can, I just can see like, why is this needed? Like especially on a class where
                    you're not extending something and you see his parent construct, you know, as somebody reviewing
                    code, you probably see this like, why are we doing that? And then you have to like realize, so it's
                    just because we're, we're calling objects that we need to keep. we need to keep the state above it.
                    So yeah, that's.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=16m44s"
                        data-turbo="false" title="Jump to 16:44 in this episode">16:44</a>)
                    <br>Yeah!
                </p>

                <p>Right. Right.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=17m10s"
                        data-turbo="false" title="Jump to 17:10 in this episode">17:10</a>)
                    <br>That's kind of a smell, but at least get in that direction of removing that constructor.
                    Basically, I would love to just get to a place where constructors are, like you really have to go to
                    links to reach them for them. Like just being able to publicly call something easier.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=17m30s"
                        data-turbo="false" title="Jump to 17:30 in this episode">17:30</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=17m32s"
                        data-turbo="false" title="Jump to 17:32 in this episode">17:32</a>)
                    <br>Yeah, which kind of like, let's think about this kind of leads me to DTOs. thing I want to talk
                    about as well is DTOs. And I don't know how you have some opinions on this because we don't have
                    very many projects that have DTOs. And recently you probably saw one of the projects I've introduced
                    a couple of new DTOs. so.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=17m44s"
                        data-turbo="false" title="Jump to 17:44 in this episode">17:44</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=17m54s"
                        data-turbo="false" title="Jump to 17:54 in this episode">17:54</a>)
                    <br>And going back to the constructor the DTO is it has like every DTO I see the static method of
                    like from like you go like New user users bad example because it's usually modeled but like just an
                    example here But new user and then you go colon colon from and then you pass it like an array and
                    that from is typically a static method that Instantiates the new user
                </p>

                <p>I've been looking into more DTOs of just kind of whipping these crazy arrays into shape and actually
                    having meaningful objects. So one in particular I introduced recently, I think I can talk about this
                    service because it's so globally known, but we were integrating with Salesforce and their API is...
                </p>

                <p>when you work with their API, give you everything when you call like an index. And so like, if you
                    call an index of, content, it gives you the, the related content, but not only that inside that
                    related content is a, is reference of other content. So, but you're getting pretty much these huge,
                    objects. And I was having to</p>

                <p>to kind of wrangle that together. What I was trying to do is was trying to code it in a way that I'm
                    looking for something inside the content.</p>

                <p>So it was just a mess to deal with in layer of our collections. So I created a DTO, basically I call
                    like Salesforce response to you, colon, colon, from, and I just give it the whole array. And then it
                    takes that and then cleans it up. creates into individual responses. And then inside that DTO class,
                    here's the really cool part. I can call like has link in content. And so I can make a method on
                    there just as a regular.</p>

                <p>expression response. It handles all of that child. The cool thing I like about DTOs the most is you
                    really can just give it anything. It's just a regular PHP class and you can just bring it the way
                    you want. But the really cool thing is like it can know like with using Laravel collections, can, if
                    there's like an object inside there, there's referencing another collection object that exists
                    elsewhere in your collection, you know what I mean? And you want to scale those down and make unique
                    content. DTOs handles that wonderfully. You can clean it up and then use like Laravel's unique
                    thing.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=20m3s"
                        data-turbo="false" title="Jump to 20:03 in this episode">20:03</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=20m9s"
                        data-turbo="false" title="Jump to 20:09 in this episode">20:09</a>)
                    <br>to clean up. Going a bit into the weeds here. But I found DTO is really helpful in that way. And
                    when I wrote that, was like, wow, this felt really good. I really liked the DTO experience on that.
                    And then what I was wondering for other apps.
                </p>

                <p>Now, Cal could utilize this more. And one app in particular that we worked on, we have a front end
                    that is an inertia app and then a backend. We need an API that plugs into a mobile app. And the way
                    that we handle that, because we don't want to write the same request object twice, the same response
                    object twice. So on the API and on the inertia front end, we have a request object, a form request
                    object, and we do the validation.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=20m45s"
                        data-turbo="false" title="Jump to 20:45 in this episode">20:45</a>)
                    <br>Yeah.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=20m55s"
                        data-turbo="false" title="Jump to 20:55 in this episode">20:55</a>)
                    <br>and then when that validation is complete, this we're still in the request object that passes to
                    the controller. But then inside the controller, there's a method that we call from the request like
                    request arrow store. And then in our request object.
                </p>

                <p>it goes and stores that object. So that way the storage is only written once. And we call that store
                    twice on the API in inertia. So it works. The only part that always has smelled funny to me, it just
                    felt weird. I've never seen out in the wild like this. haven't seen the other apps that do it this
                    way. They're usually reached for DTOs and now I get it. I see why. So I kind of painted the picture
                    here for just kind of the setup and lease for in DTOs you would essentially when it hits a request
                    object, you would</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=21m37s"
                        data-turbo="false" title="Jump to 21:37 in this episode">21:37</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=21m43s"
                        data-turbo="false" title="Jump to 21:43 in this episode">21:43</a>)
                    <br>say from this request, create this DTO object and turn on save it. It's kind of a wash if you
                    could do it either request or through a DTO, you're practically writing the same, but I'll talk
                    about how much I hate abstractions. But anyway, I'm curious of your thoughts. Like, have you dealt
                    with DTOs, pros and cons of like what I'm explaining here, and your thoughts on that.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=22m7s"
                        data-turbo="false" title="Jump to 22:07 in this episode">22:07</a>)
                    <br>Yeah, I have a lot of competing thoughts about DTOs from past experiences with sort of passing a
                    lot of data or big chunks of data around. But I want to preface this by saying I haven't done, I
                    don't think I've done a DTO in Laravel in a really long time. So I'm a bit shaky on that, but using
                    DTOs in symphony has always been...
                </p>

                <p>Not nice from from my experiences. There's a there's a site that I Was I maintain that's quite large.
                    It's a quite large symphony site and it's got like a react front-end for like inventory stuff and it
                    used to use a lot of DTOs and it was just it was kind of a pain to Go through two layers of
                    something to try to find what I was what I was wanting like why can't why couldn't I just go to the
                    symphony entity?</p>

                <p>the symphony entity and just get it there. Like it doesn't have to be anything crazy, but I don't
                    know if it's whoever originally built the site, built these DTOs, but they were just, they were
                    unnecessary. was unnecessary file, unnecessary, like extra hoop. always had to jump through. I
                    prefer to just go straight to the source if possible, but, but what you're describing makes sense. I
                    mean, especially from the site that we're talking about.</p>

                <p>General right like you have a whole front end and a whole mobile app you'd hate to write the same
                    thing twice because if you have a bug If you have a bug in one one spot, you'll have a bug in the
                    second spot and it's just it's annoying to try to find So I think you may have convinced me that
                    that the way that you did it is is a good version for DTOs I just I can't see any other site that
                    I've done so far that would benefit from</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=23m42s"
                        data-turbo="false" title="Jump to 23:42 in this episode">23:42</a>)
                    <br>Woof.
                </p>

                <p>Yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=24m5s"
                        data-turbo="false" title="Jump to 24:05 in this episode">24:05</a>)
                    <br>explicitly writing a DTO for it.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=24m8s"
                        data-turbo="false" title="Jump to 24:08 in this episode">24:08</a>)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=24m10s"
                        data-turbo="false" title="Jump to 24:10 in this episode">24:10</a>)
                    <br>So I don't know. The smeller in me is like, it's just unnecessary layer. You could either put it
                    in the model, you could put it in the controller, you can make some trait that does these kinds of
                    things for you. I don't know. I don't personally find myself ever reaching for DTOs, if that makes
                    sense.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=24m13s"
                        data-turbo="false" title="Jump to 24:13 in this episode">24:13</a>)
                    <br>Yeah.
                </p>

                <p>Mm-hmm.</p>

                <p>Yeah.</p>

                <p>Yeah, yeah, definitely. What got me thinking about it was about a year ago, Ian Landsman from the
                    show Mostly Technical with Aaron. Ian was talking about how much he loves DTOs and he gave an
                    example where he was talking about a user and just spinning up the user and being able to handle it
                    and maneuver through it. And the whole time I'm thinking, okay, it's a user, it's probably a user
                    model, you could just do a fat model and be</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=24m48s"
                        data-turbo="false" title="Jump to 24:48 in this episode">24:48</a>)
                    <br>Hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=25m4s"
                        data-turbo="false" title="Jump to 25:04 in this episode">25:04</a>)
                    <br>Be done with it. don't have to have this abstraction on with your model of like maybe so that's
                    why I was thinking like I don't get it I don't understand a DTS but but when it makes sense to me is
                    when it's outside the eloquent model space of like you're wrangling Apple Apple API and app any type
                    of Apple's APIs that they have and then Salesforce API's at least that those are a couple examples
                    where
                </p>

                <p>that just, give you so much stuff you don't really care about. And then just way too much information
                    you have to sort through. Like I was talking about, just trying to get simple information out. You
                    really have to wrangle it together. That's where DTOs make sense. And then if you're doing something
                    where you're doing an action on a model, sure, you just make a method on the model. Then there's
                    this whole thing of like Laravel actions. That's been kind of a hot thing lately I've been hearing
                    more about. Like just having an act, like inside your app directory,</p>

                <p>actions. It just does all sorts of like you know things across your app. It just handles everything.
                    There's a way of doing that.</p>

                <p>So there's just, that's why I like to say multiple is the skin of the cat, right? So, but I think
                    just the easiest way that makes sense into reading the code, you know, just understanding how it
                    works. What I love about DTS as well is they're so easy to test because you could just test the
                    objects themselves. You could just give them the data, the fake data inside the test and then call
                    the method and make sure you're getting the right result. And so like in that aspect,</p>

                <p>and Jacob Bennett recommended, he sent me this botty package called level data, which is kind of on
                    top of DTOs. Yeah. The spotty always had package for everything. Yeah. But basically what that
                    allows you to do is instead of writing that jump thing of like two array or two collection, spotty
                    does it has all that ready for you. And so you just do like class user, like DTO extends data and
                    coming from the spotty package. And it just, handles a lot of the cruff work. You don't have to all
                    that.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=26m45s"
                        data-turbo="false" title="Jump to 26:45 in this episode">26:45</a>)
                    <br>Of course, Spotty has a package. Of course.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=27m7s"
                        data-turbo="false" title="Jump to 27:07 in this episode">27:07</a>)
                    <br>export you want to do like if you want to like I said export out your collection or whatever you
                    want to do all the Laravel centric things they make it really easy so might looking to further doing
                    something like that just to kind of keep it clean if I reach for more for DTOs but yeah I thought
                    about refactoring my request pattern because it's always smelled funny to me but I don't know it's a
                    lot that is a lot to do so of just doing this this DTO thing I think for something like that maybe
                    the actions thing does make more sense but
                </p>

                <p>Yeah, just something that I've been curious of. DTOs is not something that Laravel talks about. It's
                    just kind of a programming concept that you reach for when it's necessary. But I feel like you hear
                    about it more and more for large applications that really need to wrangle heavy datasets.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=27m39s"
                        data-turbo="false" title="Jump to 27:39 in this episode">27:39</a>)
                    <br>you
                </p>

                <p>I've got a few follow up questions for you. there's been a couple things that I've worked on that
                    were very API heavy, like third party, let's go get some data, format it, and save it. And in that
                    project, we used resources, like a model resource. And so you just give it the model, you give it
                    the data, and then it spit out a formatted version of that.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=28m21s"
                        data-turbo="false" title="Jump to 28:21 in this episode">28:21</a>)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=28m24s"
                        data-turbo="false" title="Jump to 28:24 in this episode">28:24</a>)
                    <br>What would be your opinion on using something like resources versus a DTO?
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=28m31s"
                        data-turbo="false" title="Jump to 28:31 in this episode">28:31</a>)
                    <br>Yeah, that's a good one because resources you can either have a collection or one specific
                    resource. Generally resources correct me if I'm wrong, but they're kind of centralized around a
                    model, right? Like if you call resource you pass it an object and it kind of circulates that either
                    through a collection of that same object or that same model. That'd be maybe the only thing I might
                    be wrong on that. I think resource you probably probably do more with resources. I would I would
                    expect like if you call resource colon colon like new
                </p>

                <p>Whatever it just but it works. It doesn't have to be a eloquent collection</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=29m6s"
                        data-turbo="false" title="Jump to 29:06 in this episode">29:06</a>)
                    <br>that's why my question is I don't, I don't really know if there is an answer or a right answer.
                    just, from what I've seen, that's, that's what we were using for, you know, a third party, like
                    heavy third party, a bunch of APIs they would, well, I guess maybe because we were just saving them,
                    right? We, we want to pull in all of the data and sort of standardize it across a bunch of APIs and
                    then save it to a model. So I guess that's why we used model resources.
                </p>

                <p>feed it in this data and you had a special, you know, we had special formatters and handlers on that
                    resource object based on whatever API you're working in. And it was just a whole lot easier to go,
                    okay, here's, here's a resource. you know, it's a collection of, of these standardized objects. We
                    can go ahead and just do, you know, a mass insert with, with that resource. So that's why I'm, I
                    assume that'd probably be the only time that I've ever worked. Or on something that that was, that's
                    that big that I would have.</p>

                <p>reached for a DTO besides a resource. And that's been, that's been years ago. So that's why I'm
                    curious on pick one or the other. It seems to be just preference.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=30m5s"
                        data-turbo="false" title="Jump to 30:05 in this episode">30:05</a>)
                    <br>Right. Yeah.
                </p>

                <p>I just went to their docs, where Laravel's docs and resources is actually listed under eloquent APR
                    resources. So, which I understand why you would use it for an API, but I was kind of like confused
                    of like, why is it here? Like under APR resources, because there's been plenty of times I just used
                    it on the front end outside of API stuff, or perhaps I want to something.</p>

                <p>for front end usage, without getting too off topic, but with how resources work primarily, but I was
                    kind of confused by that. But yeah, it's kind you kind of wonder inside this resource, why is is it,
                    you don't just pop in an object like storage. It seems to be very centralized around a model, at
                    least the everything in here, in here versus just giving it some generic data.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=31m2s"
                        data-turbo="false" title="Jump to 31:02 in this episode">31:02</a>)
                    <br>Alright, well then I think we've sleuthed it out then. If you're looking at maybe storing it
                    into a model, maybe that's why we're using resources so much. Okay, fair enough. I'm very ignorant
                    when it comes to DTOs.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=31m4s"
                        data-turbo="false" title="Jump to 31:04 in this episode">31:04</a>)
                    <br>Yeah, maybe that's that. I mean, could be wrong. Yeah.
                </p>

                <p>There's so many ways. Gosh, now there's another way. Good point. There's the model resources. There's
                    Laravel Actions, which Dereese from Laravel is big about that. There are several big people that
                    have been all about use actions for everything.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=31m19s"
                        data-turbo="false" title="Jump to 31:19 in this episode">31:19</a>)
                    <br>Hahaha
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=31m33s"
                        data-turbo="false" title="Jump to 31:33 in this episode">31:33</a>)
                    <br>I guess it just kind of depends on your application needs, but honestly, but, but even something
                    like this, I, I wrote it this way. That's kind of obscure. It's not really that popular. I should
                    probably think about that. Awesome. We haven't got any like question marks on it yet, but it's
                    between me and you, but it's like, wonder if we ever get some somebody else in the project. If
                    they're like, why is this in that request class? Like, why are you storing it in the request? I get
                    that take on it. But then it's just like, it's cause it's the easiest place without having to write
                    some abstraction on top.
                </p>

                <p>that. It's tricky.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=32m5s"
                        data-turbo="false" title="Jump to 32:05 in this episode">32:05</a>)
                    <br>Hmm, very hot button topic you've added here. I'm curious on if anybody else is listening has
                    heavy opinions on DTOs just in general or DTOs in Laravel. I'm curious, let us know.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=32m10s"
                        data-turbo="false" title="Jump to 32:10 in this episode">32:10</a>)
                    <br>Yeah, a lot of ways.
                </p>

                <p>Yeah.</p>

                <p>That's what I was trying to get a feel on as well, like the community.</p>

                <p>like the gauge of things of like which way they go is generally the way I like to do things. Like if
                    most people favor DTOs, if that's kind of their how you traditionally do it, I'd probably lean on
                    DTO or versus like an action thing or whatever. But yeah, I'm kind of curious as well if you know a
                    pattern how to handle this. Basically, what I'm trying to understand is you have, like I mentioned
                    earlier, you have API and then you have like a front end, inertia front end.</p>

                <p>and they write request store or some way to store the object. How do you write that once, not twice
                    in two controllers? How do you write that once and where is that Is it in request, action, DTO? It's
                    tricky.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=33m11s"
                        data-turbo="false" title="Jump to 33:11 in this episode">33:11</a>)
                    <br>Here's your interview question is you have to write this as dry as possible, right?
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=33m17s"
                        data-turbo="false" title="Jump to 33:17 in this episode">33:17</a>)
                    <br>Yeah, dude, that's actually a really good interview question. Like for if we're hiring somebody,
                    I might pop that in like just.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=33m25s"
                        data-turbo="false" title="Jump to 33:25 in this episode">33:25</a>)
                    <br>Here's a concept, keep it at literally as dry as possible.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=33m29s"
                        data-turbo="false" title="Jump to 33:29 in this episode">33:29</a>)
                    <br>Yeah, well, I mean that because there is no right or wrong answer I'm just kind of curious of
                    their beliefs to make sure that you know Just kind of get a good understanding of how they would fit
                    culturally, you know Just make sure I have a good understanding of how that you know how they would
                    feel about something like that. So yeah
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=33m45s"
                        data-turbo="false" title="Jump to 33:45 in this episode">33:45</a>)
                    <br>And if they ask what dry is, next. Oopsie.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=33m52s"
                        data-turbo="false" title="Jump to 33:52 in this episode">33:52</a>)
                    <br>So.
                </p>

                <p>So speaking of, I've seen a lot about people using AI for the rest, when they're actually in an
                    interview handling that, but just kind of a transition here to how often, I've been kind of curious,
                    how often are you using a chat GPT versus Claude for actually like getting code? if you, hey, this
                    isn't working, help me out kind of thing, what would you recommend? Have you been doing that with
                    either chat GPT or Claude?</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=34m24s"
                        data-turbo="false" title="Jump to 34:24 in this episode">34:24</a>)
                    <br>I haven't been doing it with Claude, but I try to stay away from chat GBT, like asking it for a
                    code exam, like a, like a code snippet. So like, Hey, I need to write a function that does this. And
                    then it sort of spits out a whole big long thing. try to avoid that if I can, but if I can't, it's,
                    it's always a good starting point. It's never a good finishing point in my experience, but I use a
                    lot of GitHub co-pilot more than anything. Like if, if I'm stuck, I will literally just.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=34m29s"
                        data-turbo="false" title="Jump to 34:29 in this episode">34:29</a>)
                    <br>Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=34m53s"
                        data-turbo="false" title="Jump to 34:53 in this episode">34:53</a>)
                    <br>comment line explaining what I'm trying to do and then I mean it basically does the same thing
                    as ChadGBT it spits out a snippet for me to look at and then I'll be like I could use this and then
                    I'll rewrite that snippet but I'm always very very leery of anything it just automatically spits out
                    including tests
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=35m6s"
                        data-turbo="false" title="Jump to 35:06 in this episode">35:06</a>)
                    <br>Yeah.
                </p>

                <p>yeah, absolutely. Yeah. So the reason I asked that is a lot of people have been not a lot, but I've
                    seen a lot of traction on cursor, which is like the the it's like it's like an extension of VS code
                    and it has a bunch of stuff like you can do multi cursor stuff. But then it kind of goes back to
                    like I personally haven't used a lot of chat to be teen cloud like with code generation. Usually I
                    just.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=35m22s"
                        data-turbo="false" title="Jump to 35:22 in this episode">35:22</a>)
                    <br>I've heard of that, yeah.
                </p>

                <p>Mm-hmm.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=35m41s"
                        data-turbo="false" title="Jump to 35:41 in this episode">35:41</a>)
                    <br>I do use a copilot, GitHub copilot. do use that, but for actual just like, what's wrong with
                    this code? I've seen some screenshots of people like help having them walk through the code. I've
                    seen a lot of juniors especially, but they see the reverse of that, how it's terribly wrong. And
                    there's already a bunch of.
                </p>

                <p>articles out there of that of happening. But I was just kind of curious of your take, like, because
                    you're just if you've been seeing that with cursor, or if you've been using any basically chat
                    generated or chat GPT generated code, I haven't. I was just kind of curious. But yeah, I like one
                    day it's gonna be helpful.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=36m22s"
                        data-turbo="false" title="Jump to 36:22 in this episode">36:22</a>)
                    <br>Yeah, ironically.
                </p>

                <p>One day, hopefully. Ironically, I've been using it, the most recent time I've used it was I was
                    working on a WordPress plugin and I don't work on a lot of WordPress plugins so I'm like, don't, how
                    can I clear the cache of a post? Like how do I do that? Because no offense, I couldn't find it in
                    Google search. I was like, I'll just ask chatgbt. And it was like, yeah, you call this method. And I
                    was like, I didn't know that.</p>

                <p>That method existed and then I could just Google search that method and find out, I could just pass
                    it the post ID and boom, clears my cache for me. Same way with like advanced custom fields. didn't
                    know you could clear the cache for a specific ma or a specific column of, of that until I asked chat
                    GBT. So I think that's probably the only two times it's actually like, been really helpful for me.
                    And that was probably a month ago. And I have, I don't think I've used it since other than just, you
                    know, normal copilot stuff.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=37m22s"
                        data-turbo="false" title="Jump to 37:22 in this episode">37:22</a>)
                    <br>So yeah, that's really interesting. That's a good way because Like I feel like any problem I've
                    had Googling WordPress, it's always install this plugin, it resolves your issues. Like I don't wanna
                    do that. I'm trying to not, cause to install a plugin, I have to like go research this plugin and
                    really depend that they're not gonna.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=37m31s"
                        data-turbo="false" title="Jump to 37:31 in this episode">37:31</a>)
                    <br>Yeah.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=37m40s"
                        data-turbo="false" title="Jump to 37:40 in this episode">37:40</a>)
                    <br>they're not going to expose something or you know there's a lot of issues with that but then
                    yeah so that's really helpful and that
                </p>

                <p>So I think, for me, like when I, the only thing I use chat GPT for code wise is for, for when I'm
                    trying to name a method, I can't just think of when I'm having a really hard time naming a method.
                    I'm like, I kind of give it the context. like, give me your 10 best names. And you really have to
                    tell it to give you, have to give it very specific cause otherwise it's just going to start writing
                    the implementation. Like, no, I just want the name. I know how to code it. I just want the name. And
                    so, and so that's really helpful because I like my methods really,</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=38m0s"
                        data-turbo="false" title="Jump to 38:00 in this episode">38:00</a>)
                    <br>okay.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=38m19s"
                        data-turbo="false" title="Jump to 38:19 in this episode">38:19</a>)
                    <br>clean I don't like like typically I just like them to be one or two words at most. Not something
                    that for like for example like taking one I had to do recently was taking all of the download counts
                    from Apple from the from Apple and then store them but just like how do I need like have a method
                    that names that like store like now you just have to go through but just writing something in there
                    gives you a lot of different options. It's never perfect but at least gives your brain going like
                </p>

                <p>I could take this and then come up with my own. that, I've been doing that. And then when I'm in
                    TypeScript, just generating types, that has been so helpful of like, just giving it an example of a
                    JSON response. Like, hey, I have this, I'm wanting it to add types to this. Here's what I have so
                    far. And it's been spectacular at that. So that's one thing where Copilot kind of fell short of.
                    it'll try to guess that like,</p>

                <p>it doesn't do a very good job of trying to guess because it does not have the full context. But for
                    some reason, chat GPT, just knows it just like, I think at least it's going to go in this direction.
                    Pretty much from a JSON response prompt. But it's it's been really helpful.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=39m32s"
                        data-turbo="false" title="Jump to 39:32 in this episode">39:32</a>)
                    <br>Yeah, I'm actually going to start using it that way. If I was just logging into chat, GBT to
                    look at my history and more often than not, a lot of the things that I asked Chad GBT are other
                    words for certain things. And I didn't even realize that I was doing that. And now I'm going to
                    start doing that with like methods. Like I have the same problem. I think we talked about it before.
                    Like one of, one of the hardest things ever to do in programming is to name something like any
                    variable, any.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=39m46s"
                        data-turbo="false" title="Jump to 39:46 in this episode">39:46</a>)
                    <br>Mm.
                </p>

                <p>Yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=40m1s"
                        data-turbo="false" title="Jump to 40:01 in this episode">40:01</a>)
                    <br>any method name, because like you can't just name it anything. It's got to be, I've got to know
                    what it is at first glance. So I'm actually going to start, I'm going to start using that way. It
                    looks like I've already have to just, I literally just went back to my past seven days where like
                    alternative words for this word or synonyms for this word, trying to name other things. That's
                    interesting.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=40m6s"
                        data-turbo="false" title="Jump to 40:06 in this episode">40:06</a>)
                    <br>Right.
                </p>

                <p>Yeah, usually that and...</p>

                <p>Usually when I get something back from clients, like we're lawyers from clients, they say, hey,
                    update our privacy policy. There's some big wordy things in there. And I'm like, hey, chat2pt, what
                    does this mean? Just to make sure that, you know, like, well, cause we're installing the privacy
                    policy for them. Just kind of make it sure that, you know, we were kind of all on the same page. but
                    yeah, it's because that's where chat2pt is really good. yeah, AI is not very,</p>

                <p>great on content. But one thing that is good is actually using AI in Laravel. I know you had a lot of
                    that going on lately. You've been doing all sorts of fun with just generating AI. So I've been kind
                    of curious what you've been up to.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=41m14s"
                        data-turbo="false" title="Jump to 41:14 in this episode">41:14</a>)
                    <br>Yeah, I'm going to keep it as general as possible, but yeah, here in the last month or so have
                    been, actually getting quite big into, into using APIs like for, for AI's like open API and things
                    of that nature. and it does get my brain moving of like past projects or, or sorting like concepts
                    of like, how could I, how could I use AI to just make this a little bit better? And I know the, I
                    know
                </p>

                <p>I know the whole like South Park meme of they took our jobs and I I definitely don't want to take my
                    own job away by using AI, but like there are some really interesting things that I, I didn't think
                    about using. when, whenever you think about like, let's, let's add AI to this project. It's usually
                    something stupid, like a, like a chat bot or, or well, that's basically pretty much always it is.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=41m47s"
                        data-turbo="false" title="Jump to 41:47 in this episode">41:47</a>)
                    <br>Okay, yeah.
                </p>

                <p>Mm-hmm. That everyone hates.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=42m5s"
                        data-turbo="false" title="Jump to 42:05 in this episode">42:05</a>)
                    <br>right, you give it some sort of knowledge base of like, if a customer asks this, you know,
                    follow up with this type of response, et cetera, et cetera, can't find, can't figure it out, you
                    know, here's the number to call an actual human. That's usually what a bunch of people think about
                    when like, let's add AI to this thing. But there's been a couple other things that I've been working
                    on, again, no specifics that are like, ooh, that's actually a really, really good idea. Like one of
                    the things that I saw that I just...
                </p>

                <p>For some reason, my dumb brain didn't figure it out was like chaining different AIs on top of each
                    other. Like if you wanted, let's say like, you just created a new package and you wanted a video to
                    post to explain what the package is. But let's say you hate the way that you look and you hate the
                    way that you sound. It's pretty real fear that most of us have. So you could maybe, maybe you make
                    an AI avatar and</p>

                <p>and have it explain the product to somebody. So you would, you you give it like a transcript and then
                    this sort of video would be generated of somebody saying that transcript. Now you think, done. But
                    what if you use the other API, which is like a text to speech or a speech to text API and made
                    captions for that YouTube video automatically. So now you have a video and captions for it and you
                    just use two APIs.</p>

                <p>It's like the idea of chaining multiple things together to make like what a normal human would do.
                    Like you'd think, I just use AI and it'll do this one simple task for me. Well, you can have it do
                    that one simple task, but you can chain on those simple tasks together. And it actually makes a
                    pretty convincing, like end product.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=43m49s"
                        data-turbo="false" title="Jump to 43:49 in this episode">43:49</a>)
                    <br>Hmm. Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=43m51s"
                        data-turbo="false" title="Jump to 43:51 in this episode">43:51</a>)
                    <br>yeah, anyway, I've been, I've been using a lot of, of that, like thinking of, how, how can I
                    chain little simple AI requests together to make like a project requirement work? And I'm, I'm very
                    curious on like in your past experiences with the projects that we've built here, do you see like,
                    is there an opportunity for a little, I'm going call it just a little sprinkle.
                </p>

                <p>a little sprinkle of AI anywhere. Like, one of the examples that I had was, was auto-generating
                    captions for videos. There's, there's sometimes a lot of videos that clients will give us. and you
                    know, the accessible ways to have captions for them and they might not provide captions cause it
                    sucks, right? It sucks to write and then you have to time it all out. What if you could just give
                    that video to AI and it spits out your captions for you, much like this podcast does on Riverside,
                    right? AI generated captions or.</p>

                <p>AI generated alt texts for images. Like you've posted a new page and the client didn't write alt
                    text. Spit that through AI, chat, GBT, Bing, Bing, boom. Here's all your alt texts, et cetera, et
                    cetera. What's your thoughts?</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=44m55s"
                        data-turbo="false" title="Jump to 44:55 in this episode">44:55</a>)
                    <br>Yeah.
                </p>

                <p>like every AI idea that's come my way, at least I'm just like, yeah, maybe some are just so far out
                    there of like, of like, it's kind of, it sounds near impossible, like to do something really neat.
                    and some of it is, it's simple, but then it's like, for the profitability standpoint from a agency
                    space, it's like, we can build this,</p>

                <p>but would a client pay for it? No. So we're trying to, as an agency, we're trying to find that middle
                    ground. What can we do? Right? And so I've been thinking a lot about this. I'm glad you brought it
                    up. And one thing I've been wanting to do and spend some time with is just taking a deep dive. And
                    the example I would love to use is to leverage AI to analyze a dataset like a provided CSV.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=45m30s"
                        data-turbo="false" title="Jump to 45:30 in this episode">45:30</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=45m50s"
                        data-turbo="false" title="Jump to 45:50 in this episode">45:50</a>)
                    <br>and extract like insights and trends. Specifically, like we have just many, so many of our
                    clients, have contact form, or we have like some way for them to reach out, kind of like a ticketing
                    system. And Zendesk got a platform, the ticketing systems, they already might have something that
                    works. So even in Lensman, I think he's doing something and kind of doing like this AI trend thing.
                    But just basically take a CSV export, you have title, description.
                </p>

                <p>in a timestamp, right? You have three columns and just look through all of it. Just tell me insights
                    and trends. What do I need to know about? Like what are some trends and things? Obviously I could
                    pipe this into ChatGPT and it just tells me the result whenever, you know, they have like a little
                    data tool, sure. But like I'm trying to think more broad than that. Yeah, many of ChatGPT is public.
                </p>

                <p>So with that, was kind of setting some requirements of like personal requirements for myself. Like
                    some of the requirements are should be able to query the model. Like tell me the top 10 types of
                    submissions this year, right?</p>

                <p>I also want the model or the service, whatever it is, be operated privately. So no data public
                    sharing or ensuring that none of the data I provide materializes or share data with or that they
                    learn from it that's available to anybody. And then some way to upload the CSV somehow. It's always
                    been tricky. You always have to write this stupid Python script or whatever, do a loop saying,</p>

                <p>giving instructions like you are a bot, know, and this entry is a submission for a contact form.
                    Please remember it to query in the future. And then title bubble, you know, you just have to write a
                    loop to go through that. And that's how I kind of train it. But I would just like, I guess I had
                    just more old school, just like, upload CSV clay, you know, and it's there, but it's just how
                    databases work, but it's not practical. get it. But just some way to do something like that.</p>

                <p>in some way to query it so with this model i've seen some of these that are like like some of these
                    have great</p>

                <p>Promises, OpenAI, stuff like that. They have great APIs, but then some of the other ones, it's like
                    Olamma. That's one I've been looking at. more private. Just being able, one of the requirements I
                    would love is the ability to query over a REST API or HTTP API. A lot of these are, have to go to
                    the command line and punch it in. So something like that.</p>

                <p>Yeah, so there's a lot of requirements to this and I wanted to avoid using tools that fights with the
                    recommended defaults. Like I don't want to write this in PHP, you know, if they're documentations in
                    Python, you know, like I need to write in Python. I'm just trying to prevent any personal
                    preferences in here, just to have a fresh open mind about this thing. And then...</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=48m38s"
                        data-turbo="false" title="Jump to 48:38 in this episode">48:38</a>)
                    <br>Right.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=48m50s"
                        data-turbo="false" title="Jump to 48:50 in this episode">48:50</a>)
                    <br>And so then I think my main thing is just kind of to embrace open source on this. What's that?
                    It's like, what's that site that has all the public.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=49m1s"
                        data-turbo="false" title="Jump to 49:01 in this episode">49:01</a>)
                    <br>Hug you in the face.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=49m2s"
                        data-turbo="false" title="Jump to 49:02 in this episode">49:02</a>)
                    <br>Hugging face, Hugging face, there's so many great models on there. Just to utilize some of
                    those, there's even datasets. So you can even probably, for the example I gave, pulling a CSV could
                    probably pull something from the dataset. I saw somebody had the Titanic survivors and their age and
                    maybe something like that for fun. But yeah, so anyway, to answer your question, I went way too long
                    on that.
                </p>

                <p>To answer your question, have so many clients that have these customer or these contact forms. I
                    think I could get a few of them to bite on AI to understand the trends of what people are writing in
                    about. There's one client particularly that I'm thinking about would love something like this
                    because they're very like pen and paper. Somebody writes in, it's to an email address, they just
                    respond. They don't really know much about that. And they kind of have an idea, so.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=49m57s"
                        data-turbo="false" title="Jump to 49:57 in this episode">49:57</a>)
                    <br>Okay. Interesting, interesting thoughts. what you said was actually quite, I hadn't thought of
                    trying to like analyze data, even though that's sort of what chat GBT is, you know, in the
                    background, it takes a lot of data from past experiences, analyzes it, and then gives you a response
                    to whatever you requested based on what it was called. So I see a lot of like, maybe there's some
                    filament widgets you could have AI generate.
                </p>

                <p>you know, users in your e-commerce store that are most likely to buy, you know, at a specific time of
                    year might be a good AI widget or something. And one of the things that I was thinking of doing,
                    there's a, there's a recent project that we're about to start. And I was like, how can we use AI to
                    sort of help us test the project itself? Cause the project has, it's very bare bones. It's pretty
                    skeleton-like and there's, there's rules and there's boundaries, but</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=50m34s"
                        data-turbo="false" title="Jump to 50:34 in this episode">50:34</a>)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=50m56s"
                        data-turbo="false" title="Jump to 50:56 in this episode">50:56</a>)
                    <br>you can have users come in and it's a site of like a bunch of user generated content. Like users
                    are gonna come in here and build any sort of combination you could possibly imagine of XYZ. Could we
                    have AI write, you know, a hundred possibilities on the fly, spit it into a test suite and test
                    those hundred possibilities. And like each deployment, I know this kind of sucks, but just bear with
                    me. Like each deployment.
                </p>

                <p>Deployment is 100 new scenarios of quote unquote users coming in and using the site and generating a
                    bunch of combinations of data. It's sort of what fake is, but it's AI generated so you don't have to
                    write it all yourself. You don't have to write for 100 cases, I wanna do this combination. I want
                    this person to generate this, that person to generate that. You just sort of have AI write it.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=51m52s"
                        data-turbo="false" title="Jump to 51:52 in this episode">51:52</a>)
                    <br>Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=51m52s"
                        data-turbo="false" title="Jump to 51:52 in this episode">51:52</a>)
                    <br>But I don't know if that's possible. I don't think that's a realistic vision, but I would love
                    for something like that to happen. Like a user-generated test. Like a real-world user. Here's
                    somebody's name, here's their age, here's their demographic, here's what they like. Can you spit out
                    a profile for that person and then use the site as that person and tell me if it sucks? That's what
                    I would love for it to, I would love for that to be a thing.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=52m1s"
                        data-turbo="false" title="Jump to 52:01 in this episode">52:01</a>)
                    <br>Mm-hmm.
                </p>

                <p>As that person, yeah, that'd be pretty sick. Yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=52m22s"
                        data-turbo="false" title="Jump to 52:22 in this episode">52:22</a>)
                    <br>I don't think it's gonna be a thing soon unless somebody's like wicked smart.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=52m28s"
                        data-turbo="false" title="Jump to 52:28 in this episode">52:28</a>)
                    <br>Yeah, I don't know in our lifetime that'd be pretty sick like to browse the website and
                    understand Point their point of view from their culture, you know, so
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=52m39s"
                        data-turbo="false" title="Jump to 52:39 in this episode">52:39</a>)
                    <br>Yeah, like, like I want, I want 64 year old Dolores to use this site. And then I want, you know,
                    21 year old Nicholas to use this site. Like obviously those two people are going to use the site a
                    hundred percent different from each other. And obviously not age shaming, but Dolores might need
                    more accessibility feature, you know, things like alt text and auto captions, whereas, know, 21 year
                    old Nicholas. So yeah, I'm, I'm, I'm, I'm dipping my toes into it a lot more.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=53m1s"
                        data-turbo="false" title="Jump to 53:01 in this episode">53:01</a>)
                    <br>Bigger buttons, yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=53m10s"
                        data-turbo="false" title="Jump to 53:10 in this episode">53:10</a>)
                    <br>or more and more and it's
                </p>

                <p>I don't want to like, what's the phrase I'm looking for? I don't want to jump ship too early. Like, I
                    see AI is good, but I also don't want it to just take over absolutely everything because that just,
                    that makes my eyes roll when I see something that's like, look, we've got AI and it's, you know, a
                    dumb chat thing again. Like, I hate that. Like let's use AI for like some actually good stuff here.
                    So anyway, that's sort of my tangent on AI in general.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=53m34s"
                        data-turbo="false" title="Jump to 53:34 in this episode">53:34</a>)
                    <br>Mm-hmm.
                </p>

                <p>Yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=53m42s"
                        data-turbo="false" title="Jump to 53:42 in this episode">53:42</a>)
                    <br>There's some good packages for Laravel. There's an OpenAI package for Laravel that I use that's
                    pretty good.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=53m50s"
                        data-turbo="false" title="Jump to 53:50 in this episode">53:50</a>)
                    <br>PJ Miller's putting out really good stuff for AI. Yeah, he has a package coming up as well. Or
                    he had a package that was just released. You can use multi models, I can't quite explain, so that
                    was really neat. But yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=53m53s"
                        data-turbo="false" title="Jump to 53:53 in this episode">53:53</a>)
                    <br>Easy.
                </p>

                <p>hey now.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=54m7s"
                        data-turbo="false" title="Jump to 54:07 in this episode">54:07</a>)
                    <br>I'm really curious where it's going to go just because it's just so complex and also I haven't
                    seen anybody at least in Laravel space. I haven't seen anyone that has been using it in a meaningful
                    way for at least for agencies and not just in Laravel but just in general like as an agency how can
                    we utilize this outside of us like we use it often but our customers our clients are asking of like
                    hey we see we've been to this AI seminar we are all in how can
                </p>

                <p>we do this and we're like, if you have an idea, us know. So, but if we now we're really trying to
                    turn that around of coming up with the ideas for the for our clients. And so I just haven't seen I
                    just been trying to think of stuff like that, like getting insights on your stuff on your site and
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=54m59s"
                        data-turbo="false" title="Jump to 54:59 in this episode">54:59</a>)
                    <br>Yeah.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=55m0s"
                        data-turbo="false" title="Jump to 55:00 in this episode">55:00</a>)
                    <br>And then I think as a Laravel developer, there's some space and maybe this could be something
                    with a night watch in the future, but of like, Hey, we, noticed your databases underperforming.
                    should, you should add an index to this column. Like, that's helpful. You know, just something to
                    that effect of just help maybe pointing us in the right direction of what they recommend. I feel
                    like we might see that definitely in the next coming years of, but just with tech advancements.
                    Yeah. Just, trying to find that line.
                </p>

                <p>of what's practical to put our time into and what would businesses buy it on, companies buy it on.
                    So, it's tricky.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=55m36s"
                        data-turbo="false" title="Jump to 55:36 in this episode">55:36</a>)
                    <br>Mm-hmm. Yeah. Well, careful, Andy. Don't say too many more, like, feature ideas or whatever for
                    Nightwatch because they're gonna take them again, okay? Shh, shh, shh, Keep them to yourself. Build
                    a package for it.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=55m41s"
                        data-turbo="false" title="Jump to 55:41 in this episode">55:41</a>)
                    <br>I know people, yeah. All right. is building something like that? Yeah. Building something like
                    that would just be insane. It would have been,
                </p>

                <p>Because I was really like wanting that and it was I'm a definitely person to scratch around it But
                    that was just something that was just so large. I couldn't even envision the scale mostly for the
                    storage aspect I couldn't get that calm. couldn't wrap my head around that at least been by myself,
                    you know and so I'm really excited to see See the product and further gonna go with it. So</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=56m19s"
                        data-turbo="false" title="Jump to 56:19 in this episode">56:19</a>)
                    <br>Yeah. So Laravel, if you're listening, make sure you, bump Andy Hinkle and, and Dalton McCleary
                    on that wait list towards the top. Please and Spanx.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=56m30s"
                        data-turbo="false" title="Jump to 56:30 in this episode">56:30</a>)
                    <br>Alright man, I've actually got to run here soon, so we might have to wrap it up and call it a
                    show. Would you like to wrap?
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/nighwatch-and-chill/transcript#t=56m37s"
                        data-turbo="false" title="Jump to 56:37 in this episode">56:37</a>)
                    <br>everybody, thank you for listening to another episode of the Midwest Artisan. You can find us on
                    Twitter and on Blue Sky now. If you wanted to leave a comment, let us know about anything we missed.
                    What's your opinion on DTO? Are you on the Laravel Nightwatch waitlist? And if so, are you below me
                    or Andy? Because if you are, yay. If you're not, can I get in front of you? Can I please cut your
                    line?
                </p>

                <p>I would love to use Nightwatch today. Alright everybody, thank you for listening. We'll see you next
                    time.</p>

            </div>
        </div>
</x-app>
