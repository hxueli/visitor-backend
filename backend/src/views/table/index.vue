<!--<template>-->
  <!--<div class="pos">-->
    <!--<div class="row" v-for="item in list">-->
      <!--<label>name</label>-->
      <!--<span class="ls">{{item.name}}</span>-->
      <!--<label>whatFor</label>-->
      <!--<span class="ls">{{item.whatFor}}</span>-->
    <!--</div>-->
  <!--</div>-->
<!--</template>-->
<template>
  <el-table
    :data="list"
    border
    style="width: 100%">
    <el-table-column  prop="name"  label="姓名"></el-table-column>
    <el-table-column  prop="phoneNumber"  label="手机号"></el-table-column>
    <el-table-column  prop="who"  label="受访人"></el-table-column>
    <el-table-column  prop="whatCompany"  label="公司"></el-table-column>
    <el-table-column  prop="whatFor"  label="缘由"></el-table-column>
  </el-table>
</template>
<script>/* eslint-disable */
  import axios from 'axios';

  export default {
    name: 'Pos',
    created() {
      axios.get('http://www.hxl.com/user/listUser')
        .then(response => {
          console.log(response);
          this.list = response.data;
        })
        .catch(error => {
          console.log(error);
          alert('网络错误，不能访问');
        })
    },
    data() {
      return {
        list: []
      }
    }
  }
</script>

<style scoped>
  .row {
    display: inline-table;
  }
  .ls {
    display: block;
  }
  .pos {
    font-size: 12px;
  }

  .pos-order {

    background-color: #F9FAFC;
    border-right: 1px solid #C0CCDA;
  }

  .order-btn {
    margin-top: 10px;
    text-align: center;
  }

  .title {
    height: 20px;
    border-bottom: 1px solid #D3DCE6;
    background-color: #F9FAFC;
    padding: 10px;
  }

  .often-goods-list ul li {
    list-style: none;
    float: left;
    border: 1px solid #E5E9F2;
    padding: 10px;
    margin: 5px;
    background-color: #fff;
    cursor: pointer;
  }

  .goods-type {
    clear: both;
  }

  .o-price {
    color: #58B7FF;
  }

  .often-goods-list {
    border-bottom: 1px solid #C0CCDA;
    height: auto;
    overflow: hidden;
    padding-bottom: 10px;
    background-color: #F9FAFC;
  }

  .cookList li {
    list-style: none;
    width: 23%;
    border: 1px solid #E5E9F2;
    height: auto;
    overflow: hidden;
    background-color: #fff;
    padding: 2px;
    float: left;
    margin: 2px;
    cursor: pointer;
  }

  .cookList li span {

    display: block;
    float: left;
  }

  .foodImg {
    width: 40%;
  }

  .foodName {
    font-size: 18px;
    padding-left: 10px;
    color: brown;
  }

  .foodPrice {
    font-size: 16px;
    padding-left: 10px;
    padding-top: 10px;
  }

  .totalDiv {
    height: auto;
    overflow: hidden;
    text-align: right;
    font-size: 16px;
    background-color: #fff;
    border-bottom: 1px solid #E5E9F2;
    padding: 10px;
  }
</style>


















<!--<template>-->
  <!--<div class="app-container">-->
    <!--<el-table :data="list" v-loading.body="listLoading" element-loading-text="Loading" border fit highlight-current-row>-->
      <!--<el-table-column align="center" label='name' width="95">-->
        <!--<template slot-scope="scope">-->
          <!--{{scope.name}}-->
        <!--</template>-->
      <!--</el-table-column>-->
      <!--&lt;!&ndash;<el-table-column label="Title">&ndash;&gt;-->
        <!--&lt;!&ndash;<template slot-scope="scope">&ndash;&gt;-->
          <!--&lt;!&ndash;{{scope.row.title}}&ndash;&gt;-->
        <!--&lt;!&ndash;</template>&ndash;&gt;-->
      <!--&lt;!&ndash;</el-table-column>&ndash;&gt;-->
      <!--<el-table-column label="phone" width="110" align="center">-->
        <!--<template slot-scope="scope">-->
          <!--<span>{{scope.row.phoneNumber}}</span>-->
        <!--</template>-->
      <!--</el-table-column>-->
      <!--<el-table-column label="who" width="110" align="center">-->
        <!--<template slot-scope="scope">-->
          <!--{{scope.row.who}}-->
        <!--</template>-->
      <!--</el-table-column>-->
      <!--&lt;!&ndash;<el-table-column class-name="status-col" label="Status" width="110" align="center">&ndash;&gt;-->
        <!--&lt;!&ndash;<template slot-scope="scope">&ndash;&gt;-->
          <!--&lt;!&ndash;<el-tag :type="scope.row.status | statusFilter">{{scope.row.status}}</el-tag>&ndash;&gt;-->
        <!--&lt;!&ndash;</template>&ndash;&gt;-->
      <!--&lt;!&ndash;</el-table-column>&ndash;&gt;-->
      <!--&lt;!&ndash;<el-table-column align="center" prop="created_at" label="Display_time" width="200">&ndash;&gt;-->
        <!--&lt;!&ndash;<template slot-scope="scope">&ndash;&gt;-->
          <!--&lt;!&ndash;<i class="el-icon-time"></i>&ndash;&gt;-->
          <!--&lt;!&ndash;<span>{{scope.row.display_time}}</span>&ndash;&gt;-->
        <!--&lt;!&ndash;</template>&ndash;&gt;-->
      <!--&lt;!&ndash;</el-table-column>&ndash;&gt;-->
    <!--</el-table>-->
  <!--</div>-->
<!--</template>-->

<!--<script>/* eslint-disable */-->
<!--//import { getList } from '@/api/table'-->

<!--export default {-->
  <!--data() {-->
    <!--return {-->
      <!--list: null-->
<!--//      listLoading: true-->
    <!--}-->
  <!--},-->
  <!--filters: {-->
    <!--statusFilter(status) {-->
      <!--const statusMap = {-->
        <!--published: 'success',-->
        <!--draft: 'gray',-->
        <!--deleted: 'danger'-->
      <!--}-->
      <!--return statusMap[status]-->
    <!--}-->
  <!--},-->
  <!--created() {-->
    <!--this.fetchData()-->
  <!--},-->
  <!--methods: {-->
    <!--fetchData() {-->
<!--//      this.listLoading = true-->
      <!--getList(this.listQuery).then(response => {-->
        <!--console.log(response.data)-->
        <!--this.list = response.data-->
<!--//        this.listLoading = false-->
      <!--})-->
    <!--}-->
  <!--}-->
<!--}-->
<!--</script>-->
