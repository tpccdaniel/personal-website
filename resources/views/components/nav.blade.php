<!-- Hero head: will stick at the top -->
<hover-effect inline-template>
    <div ref="hover" class="hero-head">
        <nav class="navbar shadow-md py-2 hover-container">
            <div class="container lg:px-32 sm:px-8" style="padding-top: 1rem; padding-bottom: 1rem">
                <div class="navbar-brand">
                    <span class="navbar-burger burger" @click="!$root.burgerOpen?$root.burgerOpen=true:$root.burgerOpen=false">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>
                <div class="navbar-menu " :class="{'is-active' : $root.burgerOpen}">
                    <div class="navbar-start sm:hidden md:block">
                        <a href="{{url('/')}}">
                            <img class="w-80" src="{{url('svgs/logo_2.svg')}}" alt="">
                        </a>
                    </div>

                    <div class="navbar-end">
                        {{--<a class="navbar-item" @click="click">--}}
                        <a class="navbar-item hover-effect" @click="$root.$emit('contactMeClicked', 'review')">
                            <span>Leave a review</span>
                        </a>
                        <a class="navbar-item hover-effect no-underline" href="{{url('blog')}}">
                            <span>Blog</span>
                        </a>
                        <a class="navbar-item hover-effect no-underline"
                           @if(Request::is('/')) @click="$root.scroll('services')" @else href="{{url('/')}}" @endif>
                            <span>Services</span>
                        </a>
                        <a class="navbar-item hover-effect"  @click="$root.$emit('contactMeClicked', 'hire')">
                            <span>Contact</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</hover-effect>
