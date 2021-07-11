<template>
  <div>
    <select v-model="selectedRange"  @change="rangeSelected" class="form-select form-select-sm" id="daterange" >
      <option label="Choose a date range" value="" disabled selected>--------------</option>
      <option value="weektodate">last 7 days</option>
    </select>
    <table class="table table-bordered table-striped">
      <tr>
        <th>serial_no</th>
        <th>sensor_id</th>
        <th>temperature</th>
        <th>humidity</th>
        <th>sensor_creation_date</th>
        <th>sensor_updated_date</th>
      </tr>
      <tr v-for="item in data" v-bind:key="item">
        <td>{{item.sensor_no}}</td>
        <td>{{item.sensor_id}}</td>
        <td>{{item.temperature}}</td>
        <td>{{item.humidity}}</td>
        <td>{{item.sensor_creation_date}}</td>
        <td>{{item.sensor_updated_date}}</td>
      </tr>
    </table>
  </div>
</template>

<script>
import axios from 'axios';
import Vue from 'vue';
Vue.use(axios);

export default {
  name: 'WeatherUpdates',
  data() {
    return {
      data:[],
      errors:[],
      selectedRange: null
    }
  },
  methods: {
    rangeSelected() {
      console.log(this.selectedRange);
      if(this.selectedRange=='weektodate'){
        axios.get('http://127.0.0.1:8000/api/weather/weektodate')
      }
    }
  },
  async created() {
    try {
      const response = await axios.get("http://127.0.0.1:8000/api/weather/");
      this.data = response.data.data;
      return this.data;
    } catch (e) {
      this.errors.push(e)
    }
  }

}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
select {
  width: 20%;
  float: right;
  margin-right: 5%;
  margin-bottom: 10px;
}
</style>
