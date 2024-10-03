<x-app>
    <x-slot name="seo">
        <title>Building for Clients or Ourselves? Sticky & Static</title>
        <meta name="description"
            content="We follow up on last week’s local fakes discussion and explore what it would take for us to fully embrace Statamic. We also tackle the big question: Do clients even use a CMS after it’s built?">
        <meta property="og:title" content="Building for Clients or Ourselves? Sticky & Static">
        <meta property="og:description"
            content="We follow up on last week’s local fakes discussion and explore what it would take for us to fully embrace Statamic. We also tackle the big question: Do clients even use a CMS after it’s built?">
    </x-slot>

    <p class="text-white/75 text-center text-sm py-2 font-sans">October 2, 2024</p>
    <h1 class="text-3xl md:text-5xl font-bold text-white text-center font-sans">Building for Clients or Ourselves? Sticky
        & Static</h1>

    <div class="max-w-3xl mx-auto mt-8">
        <div class="px-4 pb-10">
            <iframe width="100%" height="180" frameborder="no" scrolling="no" seamless=""
                src="https://share.transistor.fm/e/4a27d67b?color=1F2937&background=101827"></iframe>
        </div>

        <div class="px-4 prose prose-lg dark:prose-invert">
            <div>This week, we follow up on last week’s local fakes discussion and explore what it would take for us to
                fully embrace Statamic. We also tackle the big question: Do clients even use a CMS after it’s built?
                Maybe it’s just us, but the answer seems to be a majority time of no. YAGNI, anyone? And, in exciting
                news, Dalton drops not one but TWO new products—RapidSaaS Conduit and Autoload!
            </div>
        </div>

        <div class="px-4 mt-8">
            <iframe class="w-full h-96" src="https://www.youtube.com/embed/NuTKDvb9E_0?si=NXchsI80UDk5CcsS"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <h2 class="text-2xl font-bold text-white text-center mt-12">Transcript</h2>

        <div class="px-4 prose prose-sm dark:prose-invert">
            <div class="site-content-text site-episode-show-notes">

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=0m0s"
                        data-turbo="false" title="Jump to 00:00 in this episode">00:00</a>)
                    <br>You're listening to another episode of The Midwest Artisan. I'm your host, Andy Hinkle.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=0m6s"
                        data-turbo="false" title="Jump to 00:06 in this episode">00:06</a>)
                    <br>And I'm your cohost, Dalton McCleary.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=0m9s"
                        data-turbo="false" title="Jump to 00:09 in this episode">00:09</a>)
                    <br>Dylan, how you doing,
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=0m11s"
                        data-turbo="false" title="Jump to 00:11 in this episode">00:11</a>)
                    <br>I'm doing swell now that I have a beautiful fixed microphone. I sound crisp and clear and I
                    don't sound like I'm in a garbage can. And it's been a week and we'll get into that a bit later. But
                    I'm here. I'm happy to be here. How are you?
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=0m29s"
                        data-turbo="false" title="Jump to 00:29 in this episode">00:29</a>)
                    <br>Yeah, good man. Yeah, when we were on the show last week and I could hear you through my
                    headphones, you sounded great, know, because the audio was a little bit better than the post edit
                    version. And so when I was editing, I'm like, no. I'm like, no. It's like, it keeps cutting out. So
                    yeah, we're like, we doubled and triple checked, had the microphone selected. So Caleb actually,
                    yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=0m46s"
                        data-turbo="false" title="Jump to 00:46 in this episode">00:46</a>)
                    <br>Yeah.
                </p>

                <p>Yeah.</p>

                <p>My</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=0m56s"
                        data-turbo="false" title="Jump to 00:56 in this episode">00:56</a>)
                    <br>The other day, Caleb tweeted out something. He like recorded an hour, it was like four or 45
                    minutes, somewhere around there, of like some tutorial. And he's like, gosh dang it, I selected the
                    wrong microphone. So, and just, yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1m9s"
                        data-turbo="false" title="Jump to 01:09 in this episode">01:09</a>)
                    <br>It's rough because you, you slacked me about it and like, dude, you're going to hate this and
                    you sent me a clip of it and it sounds like I'm in a garbage can. And you can't, you can't just like
                    rerecord a podcast with all those topics because it's can't just like fake the same responses and
                    stuff. Like that's just lame.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1m16s"
                        data-turbo="false" title="Jump to 01:16 in this episode">01:16</a>)
                    <br>Sorry.
                </p>

                <p>Just roll over. Just say your voice again. Just repeat your voice. Just roll over.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1m27s"
                        data-turbo="false" title="Jump to 01:27 in this episode">01:27</a>)
                    <br>Yeah, just dub me over. Get AI. Train it on my voice model. If that ever happens again, you can
                    just have an AI adult and be your, your cohost.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1m40s"
                        data-turbo="false" title="Jump to 01:40 in this episode">01:40</a>)
                    <br>Yeah, AI powered podcast So yeah, Israel like I ran attacked Israel this morning and I want to
                    get into politics or news because that's boring or at least boring content You know, you could just
                    turn on TV if you want to know what's going on but I was working with a vendor and I had no idea he
                    was from Israel and I we were working on just doing a meeting and he had postponed a couple times
                    and I was like
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1m42s"
                        data-turbo="false" title="Jump to 01:42 in this episode">01:42</a>)
                    <br>Go host, easy.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=2m5s"
                        data-turbo="false" title="Jump to 02:05 in this episode">02:05</a>)
                    <br>Okay, we'll just get it done next time. And then he emails me back and I say, hey, just let me
                    know what time of work best for you. I said, dude, it would be good. He emails me back. Well, I'm
                    currently in my bomb shelter with my family. I'm from Israel. I was like, what? I was like, why are
                    you emailing me? Just like, mind you, so this service that we're talking with, it was for like an
                    accessibility widget. So I'm like, don't worry about our accessibility widgets.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=2m22s"
                        data-turbo="false" title="Jump to 02:22 in this episode">02:22</a>)
                    <br>Yeah.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=2m31s"
                        data-turbo="false" title="Jump to 02:31 in this episode">02:31</a>)
                    <br>Like, protect yourself, take care of your family. We'll meet up later. yeah, thoughts,
                    definitely go out to that guy. It's, I can only imagine.
                </p>

                <p>what that could be like. Because I know I've dropped from work several times to between living in
                    Oklahoma and now here in Indiana. Like, shoot, we're in a tornado warning. Have to go down to the
                    basement. And it is kind of like it's not nearly as like a bomb shelter, like, you know, to the
                    you're not, you know, in that sense. But but I have been through an F5 tornado. I was in I was
                    living in more Oklahoma not to get too off the dive off the deep end here. But it sounded like a
                    train was coming through. Yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=3m9s"
                        data-turbo="false" title="Jump to 03:09 in this episode">03:09</a>)
                    <br>You get Andy talking about weather. It's bad.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=3m12s"
                        data-turbo="false" title="Jump to 03:12 in this episode">03:12</a>)
                    <br>Tornadoes, yeah, yeah, yeah, I'm way too much into weather. So yeah, man, but yeah, that was
                    kind of a crazy start to my day. I'll never forget that email. I immediately got goosebumps. Like,
                    dude, just take care of yourself. that's, but.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=3m26s"
                        data-turbo="false" title="Jump to 03:26 in this episode">03:26</a>)
                    <br>for real. It's least important.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=3m31s"
                        data-turbo="false" title="Jump to 03:31 in this episode">03:31</a>)
                    <br>Yeah, so Dalton was making fun of my shirt when I got on the show. It's a WWE shirt and has
                    well, I don't know if you're making fun of me. Maybe you liked it. Okay.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=3m40s"
                        data-turbo="false" title="Jump to 03:40 in this episode">03:40</a>)
                    <br>I am a Stone Cold Steve Austin fan. When it was those two, was Stone Cold. I was Team Stone.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=3m45s"
                        data-turbo="false" title="Jump to 03:45 in this episode">03:45</a>)
                    <br>So for the folks that are listening, I'm wearing a shirt. I went to WrestleMania this year. One
                    of my friends, he's been to like the past five or six. He asked me every year to go. And then I was
                    like, okay. He's like, he had a guilt trip to me because I just had a child this past year or the
                    year before. He's like, your child's here, ready here now. Come with me, please. I was like, okay,
                    I'll do it. And so I went to WrestleMania in Philly, had a great time. And I'm a huge fan of The
                    Rock, so I've got his shirt. And so actually in my unit test is something I want to talk about. In
                    your unit test?
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=4m14s"
                        data-turbo="false" title="Jump to 04:14 in this episode">04:14</a>)
                    <br>Mm-hmm. Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=4m16s"
                        data-turbo="false" title="Jump to 04:16 in this episode">04:16</a>)
                    <br>And do you ever use like what's kind of your thing? I know in like Laravel, like Taylor uses his
                    kids names like when you're writing like a first name test I do kind of the same thing for like my
                    son's name sometimes and then or if I if I don't do it I'll do like the Rock so it'll be like Dwayne
                    Johnson is the name or the Rock or be the Rock or Dwayne at the Rock comm or something's the address
                    or something silly things like that. Do you ever have anything it's just like go to?
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=4m42s"
                        data-turbo="false" title="Jump to 04:42 in this episode">04:42</a>)
                    <br>I'm not that funny or clever. I just use test. Like if it asks for a name, I'll do test test or
                    Mr. Test or test at test.com. I'm lame when it comes to that, but I think I should start using Stone
                    Cold. I should start using Steve Austin at stonecold.com just to combat your Dwayne Johnson at the
                    rock.com.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=4m47s"
                        data-turbo="false" title="Jump to 04:47 in this episode">04:47</a>)
                    <br>It's just test.
                </p>

                <p>sun called.</p>

                <p>You can put the page title as awesome 316 says I'll whip your ass Yeah</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=5m8s"
                        data-turbo="false" title="Jump to 05:08 in this episode">05:08</a>)
                    <br>Yeah, exactly. Every test has 316. 316 fakers getting created... Over over.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=5m16s"
                        data-turbo="false" title="Jump to 05:16 in this episode">05:16</a>)
                    <br>at at Laircon this year Adam Wathen he's really big into wrestling WWE and he he came in with
                    the yeah yeah yeah he like yeah he but anyway he came into Laircon and he had a tailwind 316 shirt
                    but it was themed like Stone Colds did you see that that was pretty sick yeah
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=5m24s"
                        data-turbo="false" title="Jump to 05:24 in this episode">05:24</a>)
                    <br>is he?
                </p>

                <p>Yes.</p>

                <p>I don't remember seeing it, but I'm gonna look it up right now, because I'm going to love it.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=5m41s"
                        data-turbo="false" title="Jump to 05:41 in this episode">05:41</a>)
                    <br>And then he came into Lyrcon, like every person when they came on stage, they had a theme song
                    and he came out to Stone Cold. So he was like, yeah, raising the middle fingers, yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=5m48s"
                        data-turbo="false" title="Jump to 05:48 in this episode">05:48</a>)
                    <br>Mm-hmm.
                </p>

                <p>My man of culture.</p>

                <p>Yes, that is the way. Listen, I don't want to derail it on a podcast between The Rock and Stone Cold,
                    but I am 100 % Team Stone Cold. Sorry.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=6m3s"
                        data-turbo="false" title="Jump to 06:03 in this episode">06:03</a>)
                    <br>I love Stone Cold 2, but yeah, I love the Rockies. Pretty cool. All right, dude. So listen to
                    North meets South podcast. They had Jason Beggs on there. So it was Jason's first podcast. I poked
                    him. was like, Jason, should do some more. has some really good takes of just kind of the things
                    they're doing at Laravel. And the dude is like a tailwind master. is the best person I know when
                    someone says they want to
                </p>

                <p>work on a Tailwind site to want to be pixel perfect like Jason Beggs is your guy.</p>

                <p>And so I would just like to hear like how he likes to build sites, how the tools he uses, some of the
                    things he's learned over the years. And so maybe it's in podcast form or whatever, but yeah, he was
                    talking about how they do it, the fakes at Laravel and it's really simple. He messaged me after the
                    show and he's like, yeah guys, it's much more simpler than you thought. Which I mean, for like a
                    database driver or something, it really is.</p>

                <p>that he was explaining like for their, they do like a fake GitHub connection, like you link your
                    GitHub and then it'll respond with like an array of repositories instead of actually going to
                    GitHub. So it'll just kind of fake out and it'll notice like your local or something and it'll just
                    return. And so instead of actually hitting the</p>

                <p>GitHub API or something that does take time. at the agency, we just heavily use the HTTP facade. And
                    that's what kind of Jake was kind of hinting at. And Jake actually, the way that Jake does it is the
                    exact same way that we do it. And it's through the service container. And I think I talked about it
                    on the last show, but through the service container.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=7m27s"
                        data-turbo="false" title="Jump to 07:27 in this episode">07:27</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=7m39s"
                        data-turbo="false" title="Jump to 07:39 in this episode">07:39</a>)
                    <br>just does a quick check if it's local, it checks if there is a fake available for that, or a
                    mock available for that. And so, and if there is, it'll return that. And if there's not a mock, it
                    actually will hit the API. But I, recently I did something where I'll just toss an exception. you
                    can either, there's three points, you can either have it return the fake or have it return to the
                    exception or actually hit the API. So it's getting way too complicated for something that should
                    just be really simple and that's.
                </p>

                <p>just faking. So one thing I've been thinking about is writing, I sent this like code snippet, like
                    anytime I think of like, what would be the dream scenario or it'd be the dream like thing. If I were
                    to write this, how would I want it to look and feel without just thinking, cause I think the, the
                    reverse of that, was like, how would I even get to that dream? You know, if I'm just thinking like
                    just at least in the surface, if I wanted to type this out, what would it look like? And what I came
                    up with,</p>

                <p>I sent it to Jake and Jason came back with saying that would be a cool solution. writing a code on a
                    podcast is the worst, know, a visual concept. But just think of the HTTP facade, right? And you do
                    like with token, you pass in your token.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=8m47s"
                        data-turbo="false" title="Jump to 08:47 in this episode">08:47</a>)
                    <br>You
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=8m52s"
                        data-turbo="false" title="Jump to 08:52 in this episode">08:52</a>)
                    <br>But then, so one of the things I've been thinking about is like a fake, a fake when Instead of
                    just like arrow fake, just doing a fake win, you could do something and then it passes a closure and
                    then could do like, if it's not in production, or you could, in that case, you can pass a
                    configuration value. And then the next line is the fake of what you would actually wanna do. And I
                    was thinking of like the fake win, maybe a second conditional could be the actual fake, I don't
                    know, because the second, moment you do fake, the code stops and it just pulls that, the,
                </p>

                <p>the interface changes into the fake, you know, and so you can't actually even proceed like with a git
                    after that or, you know, something like that. But anyway, so I was thinking that would kind of be
                    the dream, but then I'm like, it smells kind of funny, right? Having this fake in production, in
                    your productions alongside your actual other code, you know, just all of sudden it's like this
                    random fake when you know, versus being like in a service container or something a little bit more
                    simpler. So I don't know, something to think about.</p>

                <p>smells funny, yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=9m49s"
                        data-turbo="false" title="Jump to 09:49 in this episode">09:49</a>)
                    <br>Yeah, that's sort of, that's my thoughts. Yeah, that's my thoughts is it looks, you sent me the
                    code snippet, it looks a lot like you're doing an eloquent query, right? HTTP with token, arrow
                    function, fake arrow function, git. Yeah, that's where I get, it smells a little funky when you have
                    fake testing stuff in like wherever you're gonna call this API, like if you're gonna send a job to
                    call an API that says, git hub repositories.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=10m1s"
                        data-turbo="false" title="Jump to 10:01 in this episode">10:01</a>)
                    <br>Mm-hmm.
                </p>

                <p>In my ear.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=10m18s"
                        data-turbo="false" title="Jump to 10:18 in this episode">10:18</a>)
                    <br>in that job code is gonna be this sort of fake line. And that's where it does get a little wacky
                    for me personally. I like that it looks like an eloquent query, like fake when is very similar to
                    the eloquent when like hey, conditional run this subquery or continue with a different query. So
                    yeah, that's probably just my biggest hangup with it. I like the way that it looks because I can
                    read it that is like, I wanna call this API.
                </p>

                <p>but I want it to fake the response when it's not in production. App is production is false. So it
                    reads really well. It's just, yeah, the mixing of it inside business logic is what, little smelly
                    for me.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=10m56s"
                        data-turbo="false" title="Jump to 10:56 in this episode">10:56</a>)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=11m5s"
                        data-turbo="false" title="Jump to 11:05 in this episode">11:05</a>)
                    <br>I don't really know how to...
                </p>

                <p>Other than putting in this in the service provider, don't really see how it would make me not smell
                    it funky. Does that make sense? Not have it smell funky.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=11m19s"
                        data-turbo="false" title="Jump to 11:19 in this episode">11:19</a>)
                    <br>It does, yeah. Yeah, and those are my thoughts too of like having it alongside the actual code.
                    Just it's kind of weird. It feels like a crime. yeah, I feel like there I feel like I just had that
                    feeling like there's something there. I just don't know what it is. I feel like it's almost there,
                    but yeah, the package I was thinking about, we talked briefly about this last show, the wrapping the
                    DTO objects into a fake. So.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=11m35s"
                        data-turbo="false" title="Jump to 11:35 in this episode">11:35</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=11m49s"
                        data-turbo="false" title="Jump to 11:49 in this episode">11:49</a>)
                    <br>DTOs is like if you have like a GitHub user, like API object, it's gonna expect the username,
                    the follower count, stuff like that from GitHub. But actually wrapping that up into a DTO, but then
                    when you call it fake, it kind of works with how you type hint it to create that fake object of that
                    array back. So like depending on what you pass to it. So that's kind of where my package mind was
                    going with that of like creating a package that kind of.
                </p>

                <p>Automatically creates those out. But then I was looking into like factories and stuff I was like well
                    factories are kind of close to eloquent and it would have to be like outside of eloquent They were
                    outside the factories. It would just be like a random fake in there So like maybe package might I
                    don't know, but it's just every implementation can be different But I was kind of thinking about the
                    package would be strictly around the HTTP facade</p>

                <p>every app can be different of how they like to fake it. So I don't know maybe one day I'll find it.
                    Mm-hmm. Yeah</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=12m43s"
                        data-turbo="false" title="Jump to 12:43 in this episode">12:43</a>)
                    <br>That's a tricky one. Yeah, that's a tricky one. don't know if you're gonna get a 100 % like the
                    perfect solution, but there has to be something along those lines.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=12m52s"
                        data-turbo="false" title="Jump to 12:52 in this episode">12:52</a>)
                    <br>I don't think I will. Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=12m58s"
                        data-turbo="false" title="Jump to 12:58 in this episode">12:58</a>)
                    <br>I think there's something there. This is what I'm getting at.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=12m59s"
                        data-turbo="false" title="Jump to 12:59 in this episode">12:59</a>)
                    <br>I think of this, yeah. I still, like the solution I have now. I don't think I would change it in
                    the code base. Like honestly, if I wrote this, I probably wouldn't change it in the code base.
                    That's the thing. I think, yeah, that's kind of the thing that's keeping me away, you know, of even
                    going further on this is my, like my idea or my, I think would be a better implementation would
                    actually implement that. And the answer is no. And until I start to really think about making that
                    transition.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=13m27s"
                        data-turbo="false" title="Jump to 13:27 in this episode">13:27</a>)
                    <br>Yeah, Fair point. It's sticky for sure. That's a sticky one.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=13m32s"
                        data-turbo="false" title="Jump to 13:32 in this episode">13:32</a>)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=13m33s"
                        data-turbo="false" title="Jump to 13:33 in this episode">13:33</a>)
                    <br>Before I keep talking about sticky things, I think we should transition to something else like
                    CMSs because I have a few opinions on CMSs. You have some opinions on CMSs and there was a Mostly
                    Technical podcast that was just released about CMSs. let's talk about... Yeah, that's the... That's
                    why you're the perfect host.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=13m51s"
                        data-turbo="false" title="Jump to 13:51 in this episode">13:51</a>)
                    <br>From sticky to sticky to static.
                </p>

                <p>Yeah.</p>

                <p>No, yeah, I listened to that with Jack McDade and the crew he had. I've kind had a hodgepodge of
                    people coming in and out. It's just like, Caleb came in with kind of the swing of like of the
                    opinions and all the things I agreed with in Caleb's court. But I wanted to I also want to talk
                    about this and because one thing I found interesting, they asked who is Jack's target audience?</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=14m11s"
                        data-turbo="false" title="Jump to 14:11 in this episode">14:11</a>)
                    <br>Yes.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=14m27s"
                        data-turbo="false" title="Jump to 14:27 in this episode">14:27</a>)
                    <br>And he said that would be like agencies, people building a lot of sites. And that's what we do.
                    We build many sites, many different types of applications from static websites to a full SAS
                    applications to, you know, iOS apps that have like a layer of L API in the backend. So it's very
                    diverse, wide variety. And we also use many different CMSs. And so.
                </p>

                <p>My mind of like, we one site, just one on Statamic And it was kind of a trial to see if it would
                    work. And the reason we chose Statamic for this site is they're very big about SEO. They're very
                    hard on us about like, we decide, we think that would be a great fit for their SEO campaigns. And
                    that's where we want more of a flat file, static, very quick, very.</p>

                <p>very fast and to where it's practically once it hits a server, it's just loading an HTML file. like
                    the name suggests, static, there's no API integrations. not, we don't have anything going crazy.
                    Like we're not checking the status of a shopping cart or checking the status of the current
                    authenticated user. All of the stuff that can get kind of, drive up performance. The top thing was
                    just driving</p>

                <p>site performance, how fast we can get the site to load and which in retrospect also increases your
                    SEO score depending on how you're targeting. actually their traffic did pick up by, it was a good
                    margin, it was like 300 % in the course of 12 months. Yeah, yeah, yeah, it tripped, yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=16m2s"
                        data-turbo="false" title="Jump to 16:02 in this episode">16:02</a>)
                    <br>Yeah, that's a really good margin. I was thinking you're gonna say like 20 % 300 % it yeah,
                    that's a that's a boom
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=16m13s"
                        data-turbo="false" title="Jump to 16:13 in this episode">16:13</a>)
                    <br>A lot of that feel like was from the efforts that we did with Statamic but
                </p>

                <p>the developer experience on that was good. It's like, it's better than WordPress by far. know, I've
                    developed, developed probably, I would say I'm close to a hundred WordPress sites, if not, like I've
                    over my lifetime, I've been through the ringer of WordPress. I'm happy to work in WordPress.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=16m23s"
                        data-turbo="false" title="Jump to 16:23 in this episode">16:23</a>)
                    <br>Hahaha!
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=16m37s"
                        data-turbo="false" title="Jump to 16:37 in this episode">16:37</a>)
                    <br>It's not my favorite. I think we talked, we had when we first started the show, we talked about
                    how we're never going to mention WordPress. I feel like every show it comes up. But that's, yeah.
                    Yeah. But, but with Statamic by far an upgrade from WordPress, very rich in the data and the
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=16m50s"
                        data-turbo="false" title="Jump to 16:50 in this episode">16:50</a>)
                    <br>They're in the news. They're in the news today. We'll get to that a bit later, too.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=17m3s"
                        data-turbo="false" title="Jump to 17:03 in this episode">17:03</a>)
                    <br>Every so we work with my biggest problem I've had with with Statamic is that when we have
                    multiple teams working on it. So we're an agency here, but we have an SEO agency somewhere else and
                    then we might have different aggregates of like someone else might be a content team.
                </p>

                <p>this is all by the company that hired us. So we're doing the development. Someone else is doing SEO
                    efforts, et cetera. these companies, they're like, hey, we know WordPress. occasionally we'll get
                    one like, yeah, we know Statamic we love it. But then some other ones are like, what's Statamic And
                    they want to incorporate some type of like,</p>

                <p>a sharing feature, which no one uses these days. You click a button to share it on a social media. At
                    least, I don't know. Every analytics I put on that, it does not get hits. But anyway, they wanted
                    that. wanted some, but they're like, we could just go to the plugin store on WordPress and install
                    this. I'm like, guys, all right. So then I'm thinking, all right, well, then we have to deal with
                    the opinions of that plugin maintainer of what they thought would be the best.</p>

                <p>Then also we were using WordPress, is going to impact your SEO. Like it's going to be more, it's
                    going to not be as performance or it's not going to be better in performance. So it was, it was just
                    kind of hard to get some of these contractors to buy into this that haven't worked in before. And
                    they're just so ingrained in these other ecosystems. They're like, what's Laravel what, you know,
                    just having to explain what Laravel is. And so, I, I think that's where my tough place of like doing
                    that.</p>

                <p>of setting that up and being excited about it and then being like, well, I just want to install this
                    plugin that has the share thing. And now they come to us and say, hey, what will it take for you to
                    develop that? Or like, it'll take maybe an hour or two, which is just a couple hundred bucks. But
                    then they're like, Well, that's crazy. I would just rather buy a plugin that's five, 10 bucks tops.
                    And so.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=18m52s"
                        data-turbo="false" title="Jump to 18:52 in this episode">18:52</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=19m7s"
                        data-turbo="false" title="Jump to 19:07 in this episode">19:07</a>)
                    <br>these clients that, and it's not necessarily the client, the clients in these calls just kind of
                    like listening to one side, listening to the other. And they're kind of, they're in the middle of
                    it. And so, and it's the good old fashioned, you know, contractor debate of like which one, which
                    one they prefer. So, and we don't ever want our clients to be in that situation. We want to come in
                    feeling confident about our technical stack of what we picked. And so,
                </p>

                <p>yeah, it's kind of a tricky situation to be in. think that experience is just kind of. I just don't
                    want our clients to have to constantly go through that. And I don't know how to get out of that
                    without them being like, yeah, Statamic We know them, you know? And I don't know if that could just
                    be just like a one-off thing. Maybe there's more people that do know about it, or if there's teams
                    that if they're, if all we do is strictly work on side, I think we don't have those contractors that
                    come in and help.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=19m46s"
                        data-turbo="false" title="Jump to 19:46 in this episode">19:46</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=20m1s"
                        data-turbo="false" title="Jump to 20:01 in this episode">20:01</a>)
                    <br>Maybe our team isn't big enough. Maybe his target agency is bigger than our agency because we're
                    only a team of like what 30 some employees We don't have we don't yeah, there's actually companies
                    that just as big as us and not bigger that strictly do that's all they do is SEO so those are type
                    of people that we we work with and so I don't know maybe I'm Maybe I'm just thinking this wrong
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=20m8s"
                        data-turbo="false" title="Jump to 20:08 in this episode">20:08</a>)
                    <br>Yeah, six devs.
                </p>

                <p>Yeah, maybe, maybe we're just, yeah, maybe we're just not the target audience. Cause the site you're
                    talking about, the one Statamic site we have, I think, I think it's just you and I who's, who's
                    worked on it of, of the other developers here. And I mean, it's, it's fine. My opinion of it is
                    it's, it's in a very weird middle ground. Like there's definitely a niche for like a really good
                    Laravel CMS that's comparable to WordPress. And the problem I think Statamic has is that.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=20m34s"
                        data-turbo="false" title="Jump to 20:34 in this episode">20:34</a>)
                    <br>development, yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=20m51s"
                        data-turbo="false" title="Jump to 20:51 in this episode">20:51</a>)
                    <br>its marketplace is not as
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=20m56s"
                        data-turbo="false" title="Jump to 20:56 in this episode">20:56</a>)
                    <br>robust here. Yeah, yeah, yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=20m57s"
                        data-turbo="false" title="Jump to 20:57 in this episode">20:57</a>)
                    <br>crowded is not the word, like there's options for literally everything. And sometimes there's
                    like seven options for the one thing. And that's where I think Statamic fails. I mean, it's no fault
                    of them. Like it's good. It's better than WordPress. mean, I'll work in, I don't want to name drop
                    another PHP framework, but I'd rather work in other PHP frameworks than WordPress. Anyway, we're
                    talking about Statamic. I want to talk about the WordPress drama. We'll get to that a minute.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=21m2s"
                        data-turbo="false" title="Jump to 21:02 in this episode">21:02</a>)
                    <br>Everything, yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=21m26s"
                        data-turbo="false" title="Jump to 21:26 in this episode">21:26</a>)
                    <br>But yeah, I think that's where it fails the most is that marketplace. If it's trying to be a
                    good WordPress replacement or like a Laravel version of WordPress, there has to be so many more
                    packages for it. it has to be super easy to install.
                </p>

                <p>That's where it gets a little sticky is, you don't want to do a bunch of custom development for a CMS
                    when somebody like a client's like, could, I could spend $20 on this WordPress plugin and Bing bang
                    boom. It's done. might not be the greatest plugin and it might be held together by like literally
                    duct tape. Like somebody just slapped a thumb drive into your server, like that level of crap
                    spaghetti code, but it does the thing that it's supposed to do. And</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=21m43s"
                        data-turbo="false" title="Jump to 21:43 in this episode">21:43</a>)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=22m9s"
                        data-turbo="false" title="Jump to 22:09 in this episode">22:09</a>)
                    <br>That's just, that's really hard to build up over time because WordPress is so old in software
                    development terms, it's old. So it's got a lot of stuff for it. It's kind of like Laravel has a lot
                    of packages for it, makes it really great. And you could really blame Spatie for that because I
                    think they're like, 50 % of all the Laravel packages at this point, they've got like hundreds and
                    hundreds and hundreds. Shout out Spotty. Spasi. Sorry if I said that wrong.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=22m36s"
                        data-turbo="false" title="Jump to 22:36 in this episode">22:36</a>)
                    <br>Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=22m38s"
                        data-turbo="false" title="Jump to 22:38 in this episode">22:38</a>)
                    <br>I'm from the Midwest, an Indiana boy, we have dumb sayings. My apologies.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=22m39s"
                        data-turbo="false" title="Jump to 22:39 in this episode">22:39</a>)
                    <br>Yeah
                </p>

                <p>No. Yeah. So that's another Midwest saying like, yeah. Just like, yeah. Yeah. Yeah. Yeah. So, yeah.
                    With Statamic when we have our, our clients that are not technical, they want us to make these
                    decisions about</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=22m50s"
                        data-turbo="false" title="Jump to 22:50 in this episode">22:50</a>)
                    <br>No, yeah. Wait a minute.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=23m3s"
                        data-turbo="false" title="Jump to 23:03 in this episode">23:03</a>)
                    <br>They want us to make these decisions about stack. They they don't care. They just want to be a
                    great experience for their users They don't want to kind of be drawn into the middle of that we
                    rescue a lot of WordPress apps and their old WordPress site was exactly what you're kind of thinking
                    where you're describing here and
                </p>

                <p>I was kind of telling them, I was like, you guys are kind of leading down this path of going this
                    direction. We originally rescued their site. It was a WordPress site, probably had 30 plugins
                    installed, kind of the same thing, like, a share thing or this and that. And they just install these
                    things. And then they're like, our site is so slow. And it can be easy to fall into that from
                    non-technical people or people that just do content and just click to install a plugin and it works.
                </p>

                <p>Yeah, it's like to get us more on board with Statamic , I think it would just have to be a very
                    straightforward site to where we have total greenfield control over because anytime we have other
                    contractors coming in, it's just like we have to, they always put question marks around what's
                    Statamic why are we using it, why aren't we using...</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=24m4s"
                        data-turbo="false" title="Jump to 24:04 in this episode">24:04</a>)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=24m16s"
                        data-turbo="false" title="Jump to 24:16 in this episode">24:16</a>)
                    <br>XCMS or you know because there's so many of them these days so and we use all sorts of different
                    ones I think the Statamic starting out would be like just having a wordpress importer and they
                    talked about that in the show but just like
                </p>

                <p>you have your WordPress site, you click it, and it's just like as close as possible to coming up with
                    Statamic, so.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=24m30s"
                        data-turbo="false" title="Jump to 24:30 in this episode">24:30</a>)
                    <br>Okay.
                </p>

                <p>That would be huge.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=24m37s"
                        data-turbo="false" title="Jump to 24:37 in this episode">24:37</a>)
                    <br>Yeah. Yeah. But as far as just getting to bite to do like just about every static content site
                    on it, where it's just like we're point shoot CMS. The other thing that at least my experience, I
                    don't know about yours, you sort of Dalton, you deal with a lot more in CMS is than I do and at the
                    agency. And so every CMS I put together and my call, they're going to love this. And then I look at
                    the stats, I look at the analytics, like when they're getting in there, cause we, you know, we log
                    in, we keep track of like if they log in or what they're doing in there for revisions and stuff.
                </p>

                <p>use it. They send us a message like, hey, we want to tweak this image or hey, we want to tweak this
                    title. Okay, we'll do it for you. We'll be happy to do that work and support us and we'll be happy
                    to support you, etc. But it's just like the CMSs that we built, they barely use it and no matter how
                    much documentation, no matter how many tutorials either through text or through document, like
                    written documentation or video that we do, it's like they want us to do it.</p>

                <p>get that from non-technical people but yeah it's difficult right so maybe where I'm going is like
                    they have to be technical and we have to have open green filled without other contractors right so
                    yeah</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=25m52s"
                        data-turbo="false" title="Jump to 25:52 in this episode">25:52</a>)
                    <br>Yeah. So maybe that just goes back to it's, it's, it's more on us. guess we have to be better
                    at, I guess educating them on this as an option versus, you know, something like WordPress. And I
                    was just on Statamic website and they have this like this, they have a page Statamic versus
                    WordPress. And it was interesting. The very bottom of it says, you know, it's a, table that compares
                    Statamic to WordPress. And there was a column or excuse me, there was a row that was like, is it
                    perfect? No. And it said no for both.
                </p>

                <p>I think that's the perfect spot. But yeah, to your point, it's just the clients using the CMS.</p>

                <p>almost never happens. So at the agency we work at now, I build CMSs more so for project managers.
                    It's not building a CMS for like super non-technical people, because like some of our project
                    managers can get technical, but like they don't know 700 different things. They've got like 400
                    different projects they're working on. So I ended up mostly building a CMS and all of the
                    documentation for the project managers.</p>

                <p>So whenever a client goes, Hey, can we update this page instead of the client, instead of them doing
                    it, which they have the option to, they just for whatever reason, refuse to, or don't want to, or
                    whatever. They'll send a test like, Hey, update this page. And instead of the project manager just
                    immediately handing it to me, that project manager can just go in and make the change themselves.
                    And it never really hits my plate. So I I've been building a lot more CMSs for project managers than
                    I have for clients, non-technical people.</p>

                <p>Even though it does support that and I write quite a lot of documentation for it. Is just for
                    whatever reason? They just don't want to, they have really strong opinions on what you pick, but
                    then they don't want to use it unless it's WordPress because, because reasons. I don't, I don't
                    understand the reasons. Please tell me. Jack, if you know, if you're listening, please tell me the
                    reasons why people pick WordPress. I'll write 700 blog posts about it.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=27m49s"
                        data-turbo="false" title="Jump to 27:49 in this episode">27:49</a>)
                    <br>Well, yeah, for me, I do have times where I do pick WordPress. And that is if they have a site.
                    I have a client site, well, one that came my way. They, but that...
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=27m57s"
                        data-turbo="false" title="Jump to 27:57 in this episode">27:57</a>)
                    <br>I ain't no no no
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=28m7s"
                        data-turbo="false" title="Jump to 28:07 in this episode">28:07</a>)
                    <br>They are so heavily ingrained into WordPress that it's like hard to get out. I'm talking, they
                    have thousands of blog posts where inside the blog posts, they have widgets that were like installed
                    from a plugin or like, you know, embedded images inside there. I'm like, yeah, we're going to stay
                    WordPress just because there's just the migration path for that would take the entire budget of just
                    building the site itself. So I'm like, so I gave them the option of like, we either keep it in
                    WordPress and just update it.
                </p>

                <p>And if I have to work in WordPress these days, which we'll talk about with WP Engine,</p>

                <p>if I have to work in WordPress, I typically reach for something like roots and it's like different
                    packages for WordPress. One of them is called Bedrock and it's like it allows you to use Composer
                    with WordPress. That's kind of my thing I like to reach for, but then on the flip side, WP Engine
                    doesn't support it. So darn WP Engine. So like with all the WordPress drama going on and just like.
                </p>

                <p>You know, maybe something good might come out this. Maybe they might support Bedrock. Maybe they
                    support some of these. Bedrock, one of the other thing they have is a theme. Like you can install
                    theme on it. It's called Sage and you can use Blade in WordPress. It's beautiful.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=29m21s"
                        data-turbo="false" title="Jump to 29:21 in this episode">29:21</a>)
                    <br>yes. Yes.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=29m23s"
                        data-turbo="false" title="Jump to 29:23 in this episode">29:23</a>)
                    <br>Can you imagine? So then I'm like, okay, I can do WordPress. So if I have a site like that where
                    I have thousands of posts I have to support with this and I'll be happy to do it. But then we are
                    partnered with WP Engine, we all of our, yeah. And so, yeah, I don't want to get too much in or like
                    the everyone's hashed that out, the WordPress and WP Engine, but.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=29m37s"
                        data-turbo="false" title="Jump to 29:37 in this episode">29:37</a>)
                    <br>You said a naughty word. Naughty word.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=29m50s"
                        data-turbo="false" title="Jump to 29:50 in this episode">29:50</a>)
                    <br>I'm kind of curious, so from our agency space, like, we've been monitoring this very closely.
                    And it was, I just left for work and I was being solo dad. My wife had to work late one night. yeah,
                    she had to work late one night and I was.
                </p>

                <p>Then all of sudden I get all these messages on my phone like about one of our biggest sites their
                    their assets are down and so and then there were WP Engine customer this is all the same night that
                    they pulled the plug on the update store and I'm positive WP Engine changed something in their SSL
                    or something like that, but they unplugged it from our CDN connection and so all of our assets went
                    down. I think it was something when they're trying to like figure out how to how to how to fix the
                    the plug and update but so we had</p>

                <p>a site down for probably like a good hour and a half of just trying to fix the images. And I ended up
                    just using the, it's just some, we're figuring some settings with SSL to not use WP Engine. And it
                    came back online, but yeah, it was just like weird stuff. like, what is happening? And so then of
                    course we get an email from the clients all like worked up there. They're about like, should we be
                    like having conversations of moving away from WP Engine?</p>

                <p>I'm like, well, I don't think so. We'll kind of continue to monitor it. They're the leading one.
                    They're the biggest host that, you know? And so I'm like, but then my mind goes like, man, it would
                    be great to like have a, have like a good old host where you just get a server rack and you can just
                    throw, you know, Sage at it or, or bedrock with WordPress if I had to work in WordPress.</p>

                <p>So yeah, I'm kind of curious. Have you been following this drama at all? The dude is what's his
                    what's his name? I forgot Matt. Yeah, it's just some of us takes him like, dude, you're just asking
                    to get sued.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=31m37s"
                        data-turbo="false" title="Jump to 31:37 in this episode">31:37</a>)
                    <br>yeah.
                </p>

                <p>Matt?</p>

                <p>Yeah. Yeah. Yeah. Yeah. For sure. Like, yeah. Like if, if Taylor Otwell went nuclear with Laravel, I
                    don't think it would be comparable to Matt's version of going nuclear with WordPress. If that makes
                    sense. Like since WordPress is so big, it's so much of the web is built with WordPress that this
                    dude saying, WordPress engine can't update their plugins. I mean,</p>

                <p>WordPress engine has like what millions of people like that's millions of sites just tossed to the
                    wind. Can't update it because I want more money or something like that. He's a, I saw somebody say
                    it was like an Elon Musk level meltdown. You know, when he bought Twitter X, whatever it's called
                    now and it like, he tanked it. This is, this is basically what this guy's doing to WordPress. And
                    so.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=32m24s"
                        data-turbo="false" title="Jump to 32:24 in this episode">32:24</a>)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=32m44s"
                        data-turbo="false" title="Jump to 32:44 in this episode">32:44</a>)
                    <br>Just for Statamic, I think there's great opportunity if there's a great Statamic to WordPress
                    migrator and you have good WordPress options
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=32m52s"
                        data-turbo="false" title="Jump to 32:52 in this episode">32:52</a>)
                    <br>Yeah, yeah, somebody, somebody tweeted the, the, on Google keywords, the, the key phrase for
                    WordPress alternative, like shot up. It was something crazy percentage, but like, you know, shot way
                    up because people are looking for different alternatives now. so it's kind of what that brings me
                    to, like, they're probably going to, there's probably going to be some lawsuit out of this because
                    people are like looking at other places.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=32m53s"
                        data-turbo="false" title="Jump to 32:53 in this episode">32:53</a>)
                    <br>There's a little wiggle room there for statiming.
                </p>

                <p>There has to be.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=33m19s"
                        data-turbo="false" title="Jump to 33:19 in this episode">33:19</a>)
                    <br>And some of the WordPress developers, like the, I've seen some of Laravel developers come out
                    there and say, I'm so thankful And then, they'll like reply to them and say like, you're next. Or
                    like, think talking about the investment money. I'm just like, yeah, yeah, Laravel. just like, you
                    know, because you know, taking VC money can always be scary, but I think it's like, I've already
                    talked about how it's a great thing for, for them.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=33m34s"
                        data-turbo="false" title="Jump to 33:34 in this episode">33:34</a>)
                    <br>Larva. Yeah.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=33m46s"
                        data-turbo="false" title="Jump to 33:46 in this episode">33:46</a>)
                    <br>somebody that can be that controlling on the wordpress system and i could never see that out of
                    taylor or can you imagine if taylor did that it's just no way
                </p>

                <p>can you imagine if Node.js or NPM came out and said, hey, guys, we need to start paying up or we're
                    going NPM or to some companies or something, just crazy stuff. If you want to continue using our
                    packages, we need you to hire some developers to support it or just nonsense. hopefully, yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=33m58s"
                        data-turbo="false" title="Jump to 33:58 in this episode">33:58</a>)
                    <br>if
                </p>

                <p>That's just not the right way to do software development. That's just not the right way to do it.</p>

                <p>It's, it's almost like if AWS found out that for sale and Laravel cloud are using their services and
                    they're like, we're going to cut your account off from AWS services. And if your clients want to use
                    it, they'll have to set it up on AWS themselves. It's something of that nature. Like.</p>

                <p>I don't know how to do all that stuff. I'm either going to use Laravel Cloud or I'm not going to mess
                    with any of that stuff because it's way too complicated for me. I'll put it on digital ocean where I
                    have control over the server. You know, and I, I, think that's what a lot of people are going to
                    start looking at with WordPress, but sticky, sticky icky.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=34m58s"
                        data-turbo="false" title="Jump to 34:58 in this episode">34:58</a>)
                    <br>Let me tell you, yeah. Don't ever host WordPress on AWS, it's a nightmare. So been down that
                    road. But yeah, man, yeah, I'll hope it cleans up. It's just unfortunate to see that split. And the
                    only thing that hurts, people are trying to get Matt to realize that hurts the most is the
                    developers and the companies. It doesn't hurt WP Engine. Like they're gonna still...
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=35m6s"
                        data-turbo="false" title="Jump to 35:06 in this episode">35:06</a>)
                    <br>no. no.
                </p>

                <p>Yeah, they don't.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=35m25s"
                        data-turbo="false" title="Jump to 35:25 in this episode">35:25</a>)
                    <br>they're gonna still be rolling in their money, but it really hurts companies. And people like
                    me, like where I was flying solo that night and I'm having to feed our year and a half year old
                    while trying to get this website back up. so it just, those are the type of people ends up hurting
                    of, just with the split and the divide between. So I feel that people are asking me, who do you
                    think is wrong? I feel like both parties are wrong. WP and J.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=35m41s"
                        data-turbo="false" title="Jump to 35:41 in this episode">35:41</a>)
                    <br>Hehehehehe
                </p>

                <p>Mm-hmm.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=35m55s"
                        data-turbo="false" title="Jump to 35:55 in this episode">35:55</a>)
                    <br>They're using millions of dollars in compute. They should be supporting either financially or at
                    least some type of way either or have their own mirror for these plugins for these updates to where
                    they're not hitting the WordPress organization servers or resources. So they're wrong in that
                    aspect. They have plenty of money to do that. And then on flip side, Matt is just like, he said he's
                    been trying to work with them for a long time, but then he
                </p>

                <p>went totally off the deep end there and i felt like it could have been a slower approach to to get
                    there you know some subtle steps and not such drastic changes so</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=36m36s"
                        data-turbo="false" title="Jump to 36:36 in this episode">36:36</a>)
                    <br>Yeah, way too extreme, way too quick. Like just saying, hey, you can't update any plugins as of
                    right now. Like scramble. Like that's not cool. I mean, they did lift it later and I think they gave
                    it until October 1st. Like, hey, you have until October 1st to figure it out. That's better, but
                    yeah. Way too much of a hot take. No bueno. Not a fan. I'm already not a fan of WordPress, but
                    definitely not a fan of.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=36m53s"
                        data-turbo="false" title="Jump to 36:53 in this episode">36:53</a>)
                    <br>Yeah, now that a mirror Yeah, yeah.
                </p>

                <p>So, yeah.</p>

                <p>Yeah, it kind of solidifies the kind of the path, the momentum going forward of why it's like, it
                    always had that gut feeling of like, you really don't want to have to go to WordPress unless you
                    have to. And now it just kind of even solidifies even further. yeah, I hate it for them. I hate it
                    for those developers that are really passionate about it, but yeah.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=37m6s"
                        data-turbo="false" title="Jump to 37:06 in this episode">37:06</a>)
                    <br>the guy behind it.
                </p>

                <p>Dicky.</p>

                <p>poor</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=37m26s"
                        data-turbo="false" title="Jump to 37:26 in this episode">37:26</a>)
                    <br>Yeah, I'm just thinking about it. just can't, I just can't imagine it because he, the guy
                    announced it at WordCamp. Like, I think we talked about the last show. Just like, can you imagine
                    Taylor just being like, yo guys, pay up.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=37m37s"
                        data-turbo="false" title="Jump to 37:37 in this episode">37:37</a>)
                    <br>By the way...
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=37m38s"
                        data-turbo="false" title="Jump to 37:38 in this episode">37:38</a>)
                    <br>By the way, this company has been using Laravel for years and they've made billions of dollars
                    that I haven't made anything they need to start supporting Laravel. Just can't imagine. And I know
                    it can be different versus a developer tool versus extra resourcing you're using and they're
                    actually costing them money.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=37m57s"
                        data-turbo="false" title="Jump to 37:57 in this episode">37:57</a>)
                    <br>is, I'll tell you, it is, the good thing that came out of this is it's a really good day to be a
                    lawyer specializing in software development. You about to make bank. It's a good day to be one of
                    those people. Too bad we are not that smart.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=38m10s"
                        data-turbo="false" title="Jump to 38:10 in this episode">38:10</a>)
                    <br>Yeah, for sure.
                </p>

                <p>So you launched a product today, two products today, not just one.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=38m20s"
                        data-turbo="false" title="Jump to 38:20 in this episode">38:20</a>)
                    <br>I did. Can you see the amount of gray hairs that I have received already in the 12, not 12, the
                    seven hours that it's been live? Because I feel like I've aged a decade.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=38m28s"
                        data-turbo="false" title="Jump to 38:28 in this episode">38:28</a>)
                    <br>Bye.
                </p>

                <p>Have you got... Have you got any sleep?</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=38m38s"
                        data-turbo="false" title="Jump to 38:38 in this episode">38:38</a>)
                    <br>No, I spent most of last night thinking of, I need to do that first thing in the morning. you
                    know what? I probably need to reword this really quick because no one's going to understand it. I
                    actually had notes on my phone. As I was trying to sleep last night, I pulled up my phone and I'd
                    add a quick note. I'd actually just slack it to myself. I didn't use notes. I just slacked it to
                    myself because that's the first thing I pull up when I get to work.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=38m39s"
                        data-turbo="false" title="Jump to 38:39 in this episode">38:39</a>)
                    <br>No?
                </p>

                <p>Yep.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=39m6s"
                        data-turbo="false" title="Jump to 39:06 in this episode">39:06</a>)
                    <br>And I had a list of probably four things. And then I also woke up to a Slack from you because I
                    gave you access and it also had like four or five things. was like, my God, why did I announce that
                    I was going to launch this at 8 a.m. I've got like an hour and a half to two hours worth of like
                    stuff. have to get done before I launched it. and it's. Listen, I'm glad I did it, but man, is it,
                    is it stressful? And I would, I would be lying to tell you if I wasn't still.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=39m15s"
                        data-turbo="false" title="Jump to 39:15 in this episode">39:15</a>)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=39m36s"
                        data-turbo="false" title="Jump to 39:36 in this episode">39:36</a>)
                    <br>just jacked nervous. Like you ever been so excited and so nervous at the same time? That's me
                    today.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=39m38s"
                        data-turbo="false" title="Jump to 39:38 in this episode">39:38</a>)
                    <br>Yeah, yeah, that's... Yeah, yeah, you have the 3 a.m. thoughts of doing something and you just
                    can't do it. Yeah, or you just can't get out of your mind. You have to like put it on paper to just
                    or get the code out. Yeah, I get it,
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=39m54s"
                        data-turbo="false" title="Jump to 39:54 in this episode">39:54</a>)
                    <br>Yeah, it's, I hate it. I hate every single time of it because like you get those things of like,
                    I really need this one piece in here. Like it cannot launch unless this one thing is in here. And
                    the one thing that kept me up the most was I need to make a link in the docs to the GitHub
                    repository so people can submit issues. Like I have to have that. It has to be done. And I got up
                    this morning, I was like,
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=40m8s"
                        data-turbo="false" title="Jump to 40:08 in this episode">40:08</a>)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=40m21s"
                        data-turbo="false" title="Jump to 40:21 in this episode">40:21</a>)
                    <br>No one's probably even going to buy it today or care. So I probably shouldn't even worry about
                    it. And so I didn't. That was like the one thing that kept me up the most. It's like, I need to have
                    some way to like intake issues and bugs. And it's like, nah, yeah, that's all I have for now. But I
                    didn't think that was enough, you know, at like midnight last night I was like, that's not enough.
                    But so yeah, anyway,
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=40m33s"
                        data-turbo="false" title="Jump to 40:33 in this episode">40:33</a>)
                    <br>Just have like an email address. Yeah, that works. Yeah. yeah. Mm hmm. Well, let's get
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=40m43s"
                        data-turbo="false" title="Jump to 40:43 in this episode">40:43</a>)
                    <br>I've been building two products and a company in the last two months. So since my birthday at
                    the end of July, like the day after my birthday at the end of July, to now, I've gone from nothing
                    to a full company, LLC,
                </p>

                <p>two full products released available for purchase as of today. And it is, I've lost a lot of sleep,
                    but it's fine because it's that weird part where I'm I'm sweaty excited for it, but I'm also really
                    nervous for it. So I'll give you a quick rundown. I started a company, it's called Merge Loop, and
                    I've actually bought the t-shirt. This is the one and the one only t-shirt that I have.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=41m17s"
                        data-turbo="false" title="Jump to 41:17 in this episode">41:17</a>)
                    <br>Wow.
                </p>

                <p>Very nice. I love that logo. So for the audio listeners, it's the merged loop at the OO and loop is
                    connected together to where it looks like a little loopty loop. So pretty sick.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=41m33s"
                        data-turbo="false" title="Jump to 41:33 in this episode">41:33</a>)
                    <br>It is really cool.
                </p>

                <p>Yeah, think of it as merge. It's one word, merge loop, and the first word is sort of written in your
                    classic code editor font. It's real nice, it's real sharp, and then the loop part is sort of written
                    in cursive, because it's supposed to represent a loop that makes sense.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=42m2s"
                        data-turbo="false" title="Jump to 42:02 in this episode">42:02</a>)
                    <br>MergeLoop.dev.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=42m4s"
                        data-turbo="false" title="Jump to 42:04 in this episode">42:04</a>)
                    <br>Yeah, MergeLoop.dev. I started that because, well, I've freelanced quite a bit during COVID. So
                    I was working probably 60, 80 hours a week during COVID freelancing. And I liked it a lot, but I was
                    building a lot of these products for a lot of other people. And I don't know, for whatever reason,
                    me turning 30 this year, was like, I probably should do this myself. Like why haven't I started
                    this? Why haven't I?
                </p>

                <p>taking the same amount of time and just put it towards the things that I want to build. So I turned
                    30 and my goal to myself was I'm just, I'm gonna do it. I'm gonna take a little bit of money,
                    because it's all bootstrap, no VC funding, but Took just a little bit of money to sort of pay the
                    bills and then LLC trademarks, whatever. It's like I'm just gonna build these products that I've
                    always wanted to build.</p>

                <p>And the problem is that the products I want to build aren't even the products that I launched today,
                    if that makes sense. Like I had, I was like, I need to build this product and to build that product,
                    I need this thing. And to build that product, I need this thing. So I had like a tear step ladder of
                    things that I had to build. was like, so I just did those things and I released them. So we'll get
                    into a little bit more of it in just a minute, but yeah, it's weird to say it out loud that I
                    started a company and</p>

                <p>fully funded it and I have like published products and paid Google ads, I have sponsorships and all
                    that stuff in two months. Like literally two months I think to the day. I think it was August 1st is
                    when I submitted for the LLC and it's October 1st. Two, full products.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=43m30s"
                        data-turbo="false" title="Jump to 43:30 in this episode">43:30</a>)
                    <br>Well, two months, two months, that is crazy.
                </p>

                <p>product.</p>

                <p>not just one product, there two products, that's two packages,</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=43m44s"
                        data-turbo="false" title="Jump to 43:44 in this episode">43:44</a>)
                    <br>It's, ugh, so weird to say.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=43m48s"
                        data-turbo="false" title="Jump to 43:48 in this episode">43:48</a>)
                    <br>So your products, you you built two products in there to scratch your own itch and what it
                    sounds like, what you're describing, it's like to get to the things that you're wanting to build.
                    You mentioned that you want to get to the things that you really want to build and you're tired of
                    having to have all this cruft work. Is that what you're saying?
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=44m9s"
                        data-turbo="false" title="Jump to 44:09 in this episode">44:09</a>)
                    <br>you can go to rapidSAS.dev, that's the first one, and then autoload.dev, that's the second one.
                    And sort of the big itch that I've been trying to scratch, and Andy's been in quite a few of the
                    meetings that I've had with other developers about the sort of end goal idea, like I want this idea,
                    but I've got several steps I've got to get to before I make that.
                </p>

                <p>And one of the steps was I need an easy way to build a SaaS application in Laravel and I found that
                    Laravel spark in my as Nice and politically responsible way of saying it was not what I wanted it to
                    be So I couldn't use that. I actually purchased another competitors version of a</p>

                <p>Laravel SaaS starter kit and I hated almost everything about it. Like it, it didn't make sense to me
                    and it wasn't connected to like, had to, I had to make a bunch of things in a CMS and then have that
                    propagate out to my payment provider instead of what I thought was the correct way of having the
                    payment provider be the single source of truth. Have your products, have your prices, your
                    discounts, and you sink it into your application.</p>

                <p>And it's sort of, it's a mirror instead of your application pushing the data. So was like, I can't, I
                    can't find that. Like you could use Laravel cashier. That's fine. But then I have to still build a
                    bunch of payment handlers and web hook handlers and I've got to build a cart and I've got to build a
                    checkout flow. And so I was like, I'm just going to build that package for myself basically. And so
                    that's what RapidSaaS conduit is. It's a Laravel SaaS starter kit that's built upon</p>

                <p>Laravel cashier. So when you install it, we'll handle sort of all of the cruft like carts, webhook
                    handling, payments, guest accounts, you know, it works with Stripe, Paddle, Lemon Squeezy, all of
                    the, you know, your bog standard payment providers. And it just sort of gets to the point of like,
                    if you're like me and you just want to build a SaaS product and all you want to do is I want to boot
                    it up and I'm gonna start working on the features of that SaaS product.</p>

                <p>Like it needs to do this for this user, subscription needs to do that. Like I just want to get to
                    that part as fast as possible because it's in my brain and I've got to get it out if that says
                    anything about my personality. So that's sort of what RapidSaaS Conduit is for. So I want it to be
                    this sort of conduit connection between your payment provider and your Laravel application. See
                    that? Get the name? It's this conduit connection between the two and it just lets you get.</p>

                <p>to building the stuff, the fun stuff is what I call it, the fun stuff faster, like your application
                    features and whatnot. that one's the one that probably almost killed me between the two, because
                    being able to support Stripe, Paddle, and Lemon Squeezy was not fun. I actually had to build more
                    packages to make that package so that I could make the other other package.</p>

                <p>And we've talked about it before. I built a package for remote models. That's sort of like it's an
                    eloquent model that has an API, calls an external data source, caches that data into a SQLite
                    database. And now you can use your eloquent model to query that database. I use that for connecting
                    to Stripe and Paddle and Lemon Squeezy, right? So instead of having products being stored locally
                    and then synced out to the</p>

                <p>payment provider, I can use a remote model and say, hey, give me all of the prices for this product.
                    And I could sort of cash it locally for that reason. So I had to build that.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=47m50s"
                        data-turbo="false" title="Jump to 47:50 in this episode">47:50</a>)
                    <br>And it like, does that, and it instanciates it like it, it like puts it as a collection, right?
                    Like something like sushi, right? So pulls it and puts it in a, okay, got it. Cool. Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=47m58s"
                        data-turbo="false" title="Jump to 47:58 in this episode">47:58</a>)
                    <br>Yes, yes, exactly like sushi. Exactly. So I had to, I had to build that in order to get conduit
                    to work. And then I had to build, built a couple other open source sort of web hook listener
                    packages because with Stripe and Paddle, you have to listen to a purchase event in order to create
                    like an order locally. And if you're developing local, you either have to use in grok or you have to
                    set up, you know, some sort of exposed tunnel.
                </p>

                <p>And now every time I wanted to test the checkout flow, which is quite a lot, cause I had to support
                    three payment providers. I had to do that all the time instead of exposing it and then placing that
                    as a web hook inside the payment provider and then keeping that up to date every single time was
                    just a nightmare. So just wrote a little package to do it for me so I can do all of my testing once.
                    And then I run a command that will basically go back through the history of all the events from my
                    payment provider and run them in order.</p>

                <p>so I can see that, checkout started, checkout item added, purchase. And it would run those three
                    events and those three webhook handlers in order. So it's like, I still haven't even reached the
                    idea that I started the company for. It's been two months and I've sort of built all of this
                    foundation up for it and I still haven't even gotten to the top, if that makes sense.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=49m20s"
                        data-turbo="false" title="Jump to 49:20 in this episode">49:20</a>)
                    <br>Yeah, so yeah, so a lot to unpack here with rapid SAS. So is it rapid SAS or conduit? is it
                    rapid SAS, conduit together? Conduit, okay.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=49m29s"
                        data-turbo="false" title="Jump to 49:29 in this episode">49:29</a>)
                    <br>RapidSass Conduit is the official name, but I shortened it to Conduit. That's fine.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=49m34s"
                        data-turbo="false" title="Jump to 49:34 in this episode">49:34</a>)
                    <br>So it's kind of the target users for that. Is it like solo developers or people wanting to build
                    their SaaS or startups or like a larger business?
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=49m46s"
                        data-turbo="false" title="Jump to 49:46 in this episode">49:46</a>)
                    <br>Yeah, it's primarily directed towards startups and smaller development teams. If you have a
                    large development team, you're probably gonna have some extra stuff you have to integrate with and
                    it's probably not great for that. But if you're like a startup or a solo developer looking to just
                    build a really quick SaaS, like, I've got an idea that I know is gonna make some money and I need to
                    build it in like a week.
                </p>

                <p>I have this idea on Monday, I've got to launch by Friday. Rapid SAS Conduit is for that reason. It's
                    meant to be so you could build SASs rapidly and have that sort of conduit connection between your
                    payment provider and your Laravel application.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=50m19s"
                        data-turbo="false" title="Jump to 50:19 in this episode">50:19</a>)
                    <br>Mm-hmm.
                </p>

                <p>So yeah, makes sense of like,</p>

                <p>it reminds me a lot of like Laravel Spark and with Conduit RapidSass. So what would be some of the
                    differences? I see like you mentioned Lemon Squeezy. What would be some of the difference between
                    the two?</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=50m36s"
                        data-turbo="false" title="Jump to 50:36 in this episode">50:36</a>)
                    <br>Mm-hmm.
                </p>

                <p>Yes, so Spark, the big thing for Spark was that they marketed as it sits next to your application. So
                    you have sort of your application and then if your user needs to manage their subscription or change
                    their payment method, you essentially redirect them to a Spark created dashboard and they could do
                    their business there. And it sort of sits right next to your application as like an external page
                    almost.</p>

                <p>And Spark really is built primarily for like subscriptions. Like you're meant to build a subscription
                    based SaaS, right, for it. Whereas Conduit also supports carts and one-time checkouts. So while the
                    name is Rapid SaaS, you could essentially build an e-commerce website with Rapid SaaS Conduit. It
                    even has components for</p>

                <p>listing out product cards. Like if you have products that aren't subscriptions, you can include one
                    component from RapidSaaS Conduit and it will list all of your products in a nice little pretty grid
                    with their little card images and all of their add to cart buttons. Which the other thing with
                    Conduit that Spark doesn't do is I can, or you as the developer can customize those product cards.
                    So say I want to</p>

                <p>have a thumbnail carousel instead of just a static thing or I want to have a drop down option for
                    shirt sizes. You could do that with RapidSass Conduit. All you gotta do is extend that class and
                    say, I wanna make my own markup for it. And every time you use that component, it's gonna use it
                    again throughout your application. So it's a little bit more flexible than what Spark is, if that
                    makes sense.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=52m39s"
                        data-turbo="false" title="Jump to 52:39 in this episode">52:39</a>)
                    <br>So these are like blade comp. So you have like your app blade, right? And your, your theme, your
                    files and all that. And you just drop in a component like from your, from, conduit rapids saas that
                    would be like a checkout cart or something. And they then it just keeps state and that. So is that
                    supported? Like, is it just layer of a blade or do you have like live wire JavaScript support? Like
                    if for like a car, for example, cause this would be some, I'd be curious of if I put a cart on my
                    website, and
                </p>

                <p>Does that support if I choose inertia or if I go over and choose blade and live wire, does it matter
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=53m17s"
                        data-turbo="false" title="Jump to 53:17 in this episode">53:17</a>)
                    <br>It is on the roadmap for now. It's just blade. I actually had, I had probably half of it working
                    with live wire. I wanted to support the payment providers first, then sort of the front end optional
                    stuff. Like people can only really choose three payment providers for selling software with Laravel.
                </p>

                <p>those big three. So yeah, I cut Livewire. I have it probably half done, so it's probably gonna be the
                    first big feature release coming soon for Conduit is Livewire support. I got Livewire powered cart,
                    an auto-updating cart icon. I've already got a cart icon component, so if it's gonna be, I'm trying
                    to take a lot of the fluff out of it.</p>

                <p>I've got a way to see if you have Livewire installed and if it is installed, then I will use the
                    Livewire version of the cart. I sort of have all of that stuff stubbed out. I think we talked about
                    it on one of these podcasts, that dynamic traits, like how do I dynamically load a trait based on
                    that? Hey-o, that's Rapid SAS Conduit because I had to, hey, do you have Laravel Cashier here
                    installed? Okay, I wanna load that Laravel cache here trait.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=54m17s"
                        data-turbo="false" title="Jump to 54:17 in this episode">54:17</a>)
                    <br>Mm-hmm. Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=54m28s"
                        data-turbo="false" title="Jump to 54:28 in this episode">54:28</a>)
                    <br>do you have lemon squeezy installed? I need to include that trait and not include the Laravel
                    cashier trait. They have lot of the same names. It's not good.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=54m38s"
                        data-turbo="false" title="Jump to 54:38 in this episode">54:38</a>)
                    <br>Same interface, right? Mm-hmm. Yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=54m40s"
                        data-turbo="false" title="Jump to 54:40 in this episode">54:40</a>)
                    <br>Yeah, yeah, a lot of that stuff. So LiveWire's coming soon, but I had to keep some of my hair
                    and I couldn't do all of it in two months.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=54m44s"
                        data-turbo="false" title="Jump to 54:44 in this episode">54:44</a>)
                    <br>Yeah, that's nice.
                </p>

                <p>Well, just supporting three payment providers, a single checkout. That's like a single page like for
                    a lot of it is on the Laravel of like a system is subscription based. But the fact that you can just
                    do like a one off or like a book or something. I could definitely see that take. So cool.</p>

                <p>And so the second one you built was just crazy that you built another one. You built, and I'm not
                    sure if you said it yet, but I have it in notes. It's autoload. So you want to talk about autoload?
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=55m23s"
                        data-turbo="false" title="Jump to 55:23 in this episode">55:23</a>)
                    <br>Yeah, and I know we've talked about CMS is a lot and that's exactly what this package is It's a
                    it's a Laravel package with a filament CMS It's called auto load. It's a auto load dev. And it is
                    basically a component based It's almost like a content block builder page. It's very similar to what
                </p>

                <p>I assume most people think of the Gutenberg editor for WordPress is right. You have got a content
                    block. It's got all of its fields in it, et cetera, et cetera. So that's exactly what auto load is.
                    It's, it's got pages, menus. It's got little notification bars. You could build nested menus inside
                    of other menus. It's got a global. It's basically just like a global key store. So if I wanted to
                    add in, you know, a company phone number and have that propagate.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=55m50s"
                        data-turbo="false" title="Jump to 55:50 in this episode">55:50</a>)
                    <br>Right. Yep.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=56m15s"
                        data-turbo="false" title="Jump to 56:15 in this episode">56:15</a>)
                    <br>to the header and the footer and then at the end of every blog, I could put a global setting and
                    say, hey, this is my phone number. And now within my blade markup, I can say, hey, include this
                    global setting, bing, bang, boom, it's already done. So it's supposed to be like a statomic
                    WordPress alternative, but built with Laravel and filament.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=56m42s"
                        data-turbo="false" title="Jump to 56:42 in this episode">56:42</a>)
                    <br>So I don't know if there's one in the filament space. so we're Nova even, but yeah, if you're,
                    if you're going into pages and menus, that's a, that's a really complex. And so, yeah. So yeah,
                    there's a lot to unpack here too. And so with, so when you set this up, do you, I,
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=56m47s"
                        data-turbo="false" title="Jump to 56:47 in this episode">56:47</a>)
                    <br>not as full-fledged as what this is. I'm aiming to try to cover all of the bases like how Drupal
                </p>

                <p>Yeah, it's a lot.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=57m9s"
                        data-turbo="false" title="Jump to 57:09 in this episode">57:09</a>)
                    <br>Do you have to start with your template or can I do this with an existing Laravel app?
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=57m14s"
                        data-turbo="false" title="Jump to 57:14 in this episode">57:14</a>)
                    <br>Yeah, great question. Both of them, AutoLoad and RapidSaaS Conduant can be installed just in any
                    old Laravel application. It's a simple Composer package. You do have to purchase a license in order
                    to install a Composer package, but it is just a Composer package. You install it, run its
                    migrations, you're good to go. If you ever decide to say, I don't want this anymore, you can
                    Composer uninstall and you'll still have the data in your database and you could do with whatever
                    you want.
                </p>

                <p>It's not gonna be something that's gonna have its claws or its hooks into your application as much as
                    something like Spark or alternatives of that nature. It's supposed to be as easy as possible. Like
                    your bog standard, I'm gonna install a Spatie package. That's the steps you should take to install
                    both of my products.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=58m3s"
                        data-turbo="false" title="Jump to 58:03 in this episode">58:03</a>)
                    <br>Nice.
                </p>

                <p>So what are some of the thoughts you mentioned pricing and having a license? are some of your
                    thoughts behind with pricing with conduit and autoload? you have them both together? Are they
                    separate? And what was kind of your process there?</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=58m17s"
                        data-turbo="false" title="Jump to 58:17 in this episode">58:17</a>)
                    <br>Yeah, they are separate licenses, so they are two separate purchases. However, they both do work
                    together. You can install them both in the same application and use them hand in hand. Actually, fun
                    fact that both of the marketing sites for these, autoload.dev and rapidSAAS.dev, both of those sites
                    are built with Conduit and Autoload. So if the package ever breaks, the marketing site's gonna break
                    so you can't buy it. So it's like it's a win-win for both of us.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=58m39s"
                        data-turbo="false" title="Jump to 58:39 in this episode">58:39</a>)
                    <br>nice.
                </p>

                <p>Hahaha</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=58m47s"
                        data-turbo="false" title="Jump to 58:47 in this episode">58:47</a>)
                    <br>Yes, pricing is funny because you never really know that much. can always quote unquote,
                    validate your idea. And so basically all I did was I looked at competitors, how they price their
                    stuff. And I just was like, okay, so a reasonable amount is between this range and this range. I'm
                    just going to shoot for the middle. And that's how pricing came out for conduit at least. That's the
                    one I know for sure has several competitors.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=59m8s"
                        data-turbo="false" title="Jump to 59:08 in this episode">59:08</a>)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=59m16s"
                        data-turbo="false" title="Jump to 59:16 in this episode">59:16</a>)
                    <br>So right now it's $150 per license per project for Conduit. And since Auto Load gives you quite
                    a bit more stuff, like you get pages, menus, caching, media library, et cetera, et cetera, that's a
                    little bit more. I priced that at 250.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=59m32s"
                        data-turbo="false" title="Jump to 59:32 in this episode">59:32</a>)
                    <br>is that for one year support or is that lifetime? How does that, lifetime support? right, yeah,
                    you're in, yeah.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=59m37s"
                        data-turbo="false" title="Jump to 59:37 in this episode">59:37</a>)
                    <br>That is lifetime. Once you buy it, it's good. The only thing you need to do is if you have
                    multiple projects, one license per project is all I ask.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=59m47s"
                        data-turbo="false" title="Jump to 59:47 in this episode">59:47</a>)
                    <br>Okay, cool. So do you have like a demo or anything? Cause you have, your site is built in it,
                    but yeah, go ahead.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=59m52s"
                        data-turbo="false" title="Jump to 59:52 in this episode">59:52</a>)
                    <br>I have.
                </p>

                <p>Yeah, this, so yeah, when, when I was looking at other competitors, they were like, yeah, show me a
                    demo and you could log into their fake CMS and do fake things. Like that's nice to see what it is,
                    but yeah, I thought, I thought I was trying to be more clever about us. Like if I just build the
                    site in the thing, the site that's trying to sell you the thing is the demo. Like you can't really
                    get into the backend and stuff, but to make a purchase, to buy RapidSaaS Conduit.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h0m3s"
                        data-turbo="false" title="Jump to 1:00:03 in this episode">1:00:03</a>)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h0m23s"
                        data-turbo="false" title="Jump to 1:00:23 in this episode">1:00:23</a>)
                    <br>off of the RapidSask Conduit site, you're going to be running through all of the same things
                    that Conduit provides. you do your checkout flow, your cart. Once you've purchased the thing, I've
                    got a little guest dashboard you can go back through and see all of your past orders, generate an
                    invoice, et cetera, et cetera. But I do have sort of like a content map and I have plans to make a
                    very short YouTube series showing sort of the backend things and how to customize them later.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h0m54s"
                        data-turbo="false" title="Jump to 1:00:54 in this episode">1:00:54</a>)
                    <br>You know what you should do is for like autoload for example the site that you built like that's
                    for autoload is built in autoload
                </p>

                <p>you should do like the login portal, but people can log in and register. They obviously can't edit
                    anything, but they can see how it works. You know, you can set some Laravel policies up and where it
                    doesn't let them, you know, modify anything. But, that would be kind of cool to at least like see
                    for them to like, at least see how the websites work. then like to your, because that, think that
                    would be something different. And then to your point of like having, having the site built in this
                    site is really cool. It's kind of like vapor running on laravel vapor running on.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h1m10s"
                        data-turbo="false" title="Jump to 1:01:10 in this episode">1:01:10</a>)
                    <br>yeah?
                </p>

                <p>Yeah, right.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h1m32s"
                        data-turbo="false" title="Jump to 1:01:32 in this episode">1:01:32</a>)
                    <br>level paper. it's just such a cool thing to actually see that. And then yeah, people can go in
                    and start like seeing like, here's how it works. And maybe like a read only element. So it'd be kind
                    of cool. But yeah, I'm really excited for you, And so you said you have a roadmap, sort of like an
                    ongoing roadmap. So what's your plans now? Are you just trying to see where the
                </p>

                <p>I'm just trying to get an idea of like, see where the market is and then future enhancements or what
                    kind of you're thinking.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h2m6s"
                        data-turbo="false" title="Jump to 1:02:06 in this episode">1:02:06</a>)
                    <br>Yeah, my plan for today, I'm going give you short-term plan and long-term plan. My plan for
                    today is to get sleep tonight and I'm not going to do anything else the rest of the day. But I just
                    released sort of a feature roadmap on both of them. So if you go to the documentation and go down to
                    support feature roadmaps, those are sort of the things that are on my radar that I'm going to try to
                    build next in sort of the highest priority, the lowest priority.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h2m13s"
                        data-turbo="false" title="Jump to 1:02:13 in this episode">1:02:13</a>)
                    <br>Yeah
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h2m36s"
                        data-turbo="false" title="Jump to 1:02:36 in this episode">1:02:36</a>)
                    <br>TBD on when those are going to come out. The thing I'm going to focus on immediately next is
                    that video series and sort of a series of blog posts sort of detailing very small pieces of both
                    Rapid SAS Conduit and Auto Load, how to make a custom field, how to make a custom content block.
                    Like the docs, I wrote the docs, so I'm biased, but I think the docs lay it out pretty well. you
                    might have, you know, you want to see a real world example.
                </p>

                <p>So my sort of next focus is building content around both of the products to showcase them more in a
                    better light. So if that means making a demo and making people able to poke around in AutoLoad
                    itself, that's kind of clever, but I also don't want them to see my future blog post titles and have
                    it quote unquote leaked if you think of it that way.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h3m29s"
                        data-turbo="false" title="Jump to 1:03:29 in this episode">1:03:29</a>)
                    <br>I with policies and stuff like that, could, yeah, but that's a lot, that's quite a bit of
                    working through some hoops in Laravel to make that happen, but I see what you're saying too.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h3m39s"
                        data-turbo="false" title="Jump to 1:03:39 in this episode">1:03:39</a>)
                    <br>That's clever. It's very clever. So yeah, right now content focused first, probably for the next
                    few weeks. And then I'm to start tackling that, that feature roadmap for, for both of them. There's,
                    three or four things, for each of them that are, that are quite large and, a few things that are
                    pretty easy to knock out and just see, see how people react. Nobody's bought it yet, but it's also
                    been live for like six hours. So I wasn't anticipating, you know, a hundred people buying this
                    thing.
                </p>

                <p>I'm probably not even expecting people to buy it this week.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h4m14s"
                        data-turbo="false" title="Jump to 1:04:14 in this episode">1:04:14</a>)
                    <br>I'm just so happy for you that you got out the door because so many, because it's turned from a
                    side project to a passion project for you. That's like when you get it to launch because so many
                    people talk about the 10%. You get 90 % there, then you have to go through 10 % of the marketing,
                    the just the kind of the things that are kind of boring, you know, just trying to get out the door.
                    You did it. You got there twice. So it's incredible. And I'm really happy for you at least.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h4m21s"
                        data-turbo="false" title="Jump to 1:04:21 in this episode">1:04:21</a>)
                    <br>Yeah.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h4m41s"
                        data-turbo="false" title="Jump to 1:04:41 in this episode">1:04:41</a>)
                    <br>You know you you got it out there and then you can continue to iterate on top of that and as
                    people provide Feedback, it'll be really good. So I'm very excited to hear more about it
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h4m52s"
                        data-turbo="false" title="Jump to 1:04:52 in this episode">1:04:52</a>)
                    <br>Thanks, man. It's been quite a journey and I would be lying to say if I didn't think about just
                    pulling the plug this morning. I think like 12 people saw the tweet that I made and it's like, I'm
                    gonna launch stuff tomorrow. And I was like, wow, if I just don't do it, I'm gonna disappoint like
                    12 people. That's not so bad, right? But I did it anyway because I convinced my CFO, my wife, to
                    basically fund the development of this stuff.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h5m0s"
                        data-turbo="false" title="Jump to 1:05:00 in this episode">1:05:00</a>)
                    <br>Jeez.
                </p>

                <p>Yeah.</p>

                <p>it.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h5m21s"
                        data-turbo="false" title="Jump to 1:05:21 in this episode">1:05:21</a>)
                    <br>I figured I at least owed somebody something to launch this thing.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h5m24s"
                        data-turbo="false" title="Jump to 1:05:24 in this episode">1:05:24</a>)
                    <br>Commit to the bit And yeah, commit to the bit and having an accountability partner is just so
                    amazing, like the things it can do.
                </p>

                <p>I've felt like that's why you always see like when you have a product you have a co-founder or
                    something that goes along with it because it's so hard to launch things on your own and to and then
                    you're just so ingrained into the product and then having somebody else see it for the first time
                    they're like did you notice that you you're you don't even have this or that yeah because you yeah
                    exactly</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h5m53s"
                        data-turbo="false" title="Jump to 1:05:53 in this episode">1:05:53</a>)
                    <br>There's a typo here and this doesn't make sense and like...
                </p>

                <p>Craziness is is what I'll say craziness</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h5m57s"
                        data-turbo="false" title="Jump to 1:05:57 in this episode">1:05:57</a>)
                    <br>All right, else you wanted to touch on that you wanted to hit on with Conduit, Rapid SAS
                    Autoload, or with your starting up Merge Loop?
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h6m10s"
                        data-turbo="false" title="Jump to 1:06:10 in this episode">1:06:10</a>)
                    <br>Buy a license? Let me know if it sucks. Let me know if it's awesome. Definitely do that. If it
                    sucks, maybe don't let me know. But I've committed to at least a monthly newsletter on Merge Loop.
                    So if you go to Merge Loop.dev, you can sign up for that newsletter and I'll be, I'm not gonna spam
                    you. It's literally once a month. And I usually put a little discounts in there for these products.
                    So if you signed up to the newsletter,
                </p>

                <p>There was like five of you before that. got a nice little discount. So let that be a thing. Get you a
                    discount and you didn't get one because I gave it to you for free because you're my buddy.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h6m49s"
                        data-turbo="false" title="Jump to 1:06:49 in this episode">1:06:49</a>)
                    <br>I was yeah, I was doing a little I was your trial user to give you some feedback
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h6m54s"
                        data-turbo="false" title="Jump to 1:06:54 in this episode">1:06:54</a>)
                    <br>Yeah, I'm a beta tester. yeah, subscribe to that newsletter once a month. It's just gonna be,
                    new feature updates. This is released, this is released. Maybe here's a discount code. Otherwise you
                    can, there's contact stuff. You can find me on MergeLoop.dev.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h7m6s"
                        data-turbo="false" title="Jump to 1:07:06 in this episode">1:07:06</a>)
                    <br>Yeah.
                </p>

                <p>MergeLoop.dev and autoload.dev and conduit at rapidSASConduit at rapidsaas.dev. excellent. cool man.
                    Weight, lift off your shoulders and sleep good tonight. Have a good, so.</p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h7m30s"
                        data-turbo="false" title="Jump to 1:07:30 in this episode">1:07:30</a>)
                    <br>I need some sleep. I don't know if it looks like it, but it was a rough afternoon yesterday and
                    a rough morning.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h7m38s"
                        data-turbo="false" title="Jump to 1:07:38 in this episode">1:07:38</a>)
                    <br>Man, launch day is always like that. It's exciting and very stressful. just, it's like, yeah,
                    very big roller coaster. Yeah, just all sorts of emotions, so.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h7m44s"
                        data-turbo="false" title="Jump to 1:07:44 in this episode">1:07:44</a>)
                    <br>You're very sweaty.
                </p>

                <p>No one tells you how sweaty you're gonna be. Let me tell you, sweaty.</p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h7m56s"
                        data-turbo="false" title="Jump to 1:07:56 in this episode">1:07:56</a>)
                    <br>Alright man, anything else to hit? You like to talk about this week?
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h8m2s"
                        data-turbo="false" title="Jump to 1:08:02 in this episode">1:08:02</a>)
                    <br>I think that's it.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h8m4s"
                        data-turbo="false" title="Jump to 1:08:04 in this episode">1:08:04</a>)
                    <br>All right, well, and wrap the show.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h8m9s"
                        data-turbo="false" title="Jump to 1:08:09 in this episode">1:08:09</a>)
                    <br>You want me to wrap the show?
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h8m10s"
                        data-turbo="false" title="Jump to 1:08:10 in this episode">1:08:10</a>)
                    <br>Yeah, let's do it. Since you had quite the week, go out the bang. So let's hear it.
                </p>

                <p>Dalton McCleery (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h8m16s"
                        data-turbo="false" title="Jump to 1:08:16 in this episode">1:08:16</a>)
                    <br>Alright, thanks everybody for listening to another episode of The Midwest Artisan with Andy and
                    myself. We'll be back next week for more stuff and we won't talk about the WordPress drama. Maybe.
                    Who knows? Alright, see you next week.
                </p>

                <p>Andy Hinkle (<a
                        href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h8m28s"
                        data-turbo="false" title="Jump to 1:08:28 in this episode">1:08:28</a>)
                    <br>It's not good content, yeah, for sure. All right, peace.
                </p>

            </div>
        </div>
</x-app>
