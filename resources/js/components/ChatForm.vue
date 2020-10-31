<template>
    <ul class="chat">
            <li class="agent clearfix"
                v-for="message in messages"
            >
                <span class="chat-img left clearfix mx-2">
                    <img :src="'/images/avatar.png'" alt="Agent" class="img-circle img-fluid" />
                </span>
                <div class="chat-body clearfix">
                    <div class="header clearfix">
                        <strong class="primary-font">{{ message.user.name }}</strong> <small class="right text-muted">
                        <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                    </div>
                    <p>
                        {{ message.message }}
                    </p>
                </div>
            </li>

            <li class="admin clearfix">
                <span class="chat-img right clearfix  mx-2">
                    <img :src="'/images/avatar2.png'" alt="Admin" class="img-circle img-fluid" />
                </span>
                <div class="chat-body clearfix">
                    <div class="header clearfix">
                        <small class="left text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                        <strong class="right primary-font">Bhaumik Patel</strong>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                        dolor, quis ullamcorper ligula sodales.
                    </p>
                </div>
            </li>

            <!--                            &lt;!&ndash;Whisper User 1&ndash;&gt;-->
            <!--                            <li class="agent clearfix">-->
            <!--                            <span class="chat-img left clearfix mx-2">-->
            <!--                                <img :src="'/images/avatar.png'" alt="Agent" class="img-circle img-fluid" />-->
            <!--                            </span>-->
            <!--                                <div class="chat-body clearfix">-->
            <!--                                    <div class="header clearfix">-->
            <!--                                        <strong class="primary-font">Jack Sparrow</strong>-->
            <!--                                    </div>-->
            <!--                                    <p>-->
            <!--                                        User is typing ...-->
            <!--                                    </p>-->
            <!--                                </div>-->
            <!--                            </li>-->
            <!--                            &lt;!&ndash;Whisper User 2&ndash;&gt;-->
            <!--                            <li class="admin clearfix">-->
            <!--                            <span class="chat-img right clearfix  mx-2">-->
            <!--                                <img :src="'/images/avatar2.png'" alt="Admin" class="img-circle img-fluid" />-->
            <!--                            </span>-->
            <!--                                <div class="chat-body clearfix">-->
            <!--                                    <div class="header clearfix">-->
            <!--                                        <strong class="right primary-font">Bhaumik Patel</strong>-->
            <!--                                    </div>-->
            <!--                                    <p>-->
            <!--                                        User is typing ...-->
            <!--                                    </p>-->
            <!--                                </div>-->
            <!--                            </li>-->
        </ul>
</template>

<script>
export default {
    props: ['messages']
}
</script>
