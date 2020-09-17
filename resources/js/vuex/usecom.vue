 <template>
         <div class="content">
			<div class="container-fluid">
                <h1> showing component change </h1>
                <h1>counter is:{{counter}}</h1>
                <div>
                    <comA></comA>
                </div>

                <div>
                    <comB></comB>
                </div>

                <div>
                    <comC></comC>
                </div>
                
                <Button type="success" @click="changeCounter">Change counter</Button>
			</div> 
        </div>      
</template>
<script>
import comA from './comA'
import comB from './comB'
import comC from './comC'
import {mapGetters} from 'vuex'
export default {
    data(){
        return {

        }
    },
    created(){

    },
    computed:{
        ...mapGetters({
            'counter':'getCounter'
        })
    },

    methods:{
        changeCounter(){
            this.$store.dispatch('changeCounterAction',1)
            //this.$store.commit('changeTheCounter',1)
        }
    },
    components:{
        comA,
        comB,
        comC,
    },
    watch:{
         counter(value){
             console.log('counter is changing', value);
         }
    }
}
</script>