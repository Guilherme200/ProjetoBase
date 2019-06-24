<template>
  <div class="row">
    <div class="col-12 col-md-5 col-lg-6">
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
        <h1 class="h3 mb-0 text-gray-800">
          <i v-if="icon" class="mr-2" :class="icon"></i>{{ header }}
        </h1>
      </div>
    </div>
    <div class="col-12 col-md-7 col-lg-6">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <slot></slot>
        </ol>
      </nav>
    </div>
  </div>
</template>

<script>
export default {
  name: "Breadcrumb",

  props: {
    header: {
      type: String,
      required: false
    },
    icon: {
      type: String,
      required: false
    }
  }
};
</script>