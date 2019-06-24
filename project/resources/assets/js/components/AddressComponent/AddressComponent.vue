<template>
  <form method="get" action=".">
    <label>Cep:
      <input name="cep" type="text" id="cep" v-model="cep" size="10" maxlength="9" /></label><br />
    <label>Rua:
      <input name="rua" type="text" v-model="street" id="rua" size="60" /></label><br />
    <label>Bairro:
      <input name="bairro" type="text" v-model="district" id="bairro" size="40" /></label><br />
    <label>Cidade:
      <input name="cidade" type="text" v-model="city_id" id="cidade" size="40" /></label><br />
    <label>Estado:
      <input name="uf" type="text" v-model="state_id" id="uf" size="2" /></label><br />
  </form>
</template>

<script>
  export default {
    name: 'address-component',

    props: {
      errors: {
        required: false,
      },

      states: {
        required: false,
      },

      cities: {
        required: false,
      },

      address: {
        required: false,
      },

      edit: {
        required: false,
        default() {
          return false;
        }
      },
    },

    mounted() {
      this.setRegisterPersonAddress();
    },

    watch: {
      errors: {
        immediate: true,
        handler(val) {
          this.cleanInputErrors();
          this.setInputErrors(val);
        },
      },

      address: {
        handler(data) {
          this.addresses.cep.value = data.cep;
          this.addresses.neighborhood.value = data.neighborhood;
          const state = _.find(this.states, ['abbr', data.uf]);
          this.addresses.state_id.value = state;
          this.addresses.street.value = data.street;
        },
      },

      'addresses.state_id.value': {
        handler() {
          this.$refs.addressNumber.$el.focus();
        },
      },

      cities(cities) {
        this.$nextTick(() => {
          if (this.address && this.address.city_id) {
            this.addresses.city_id.value = this.cities.find(city => city.id == this.address.city_id);
          }
        })
      }
    },

    data: () => ({
      addresses: {
        cep: {
          value: null,
          valid: null,
        },
        state_id: {
          value: null,
          valid: null,
        },
        city_id: {
          value: null,
          valid: null,
        },
        district: {
          value: null,
          valid: null,
        },
        street: {
          value: null,
          valid: null,
        },
        number: {
          value: null,
          valid: null,
        },
        complement: {
          value: null,
          valid: null,
        },
        country: {
          value: null,
          valid: null,
        },
      },
      hasAddress: false,
    }),

    methods: {
      addressObject() {
        return {
          addresses: {
            cep: this.addresses.cep.value,
            state_id: this.addresses.state_id.value.id,
            city_id: this.addresses.city_id.value.id,
            neighborhood: this.addresses.neighborhood.value,
            street: this.addresses.street.value,
            number: this.addresses.number.value,
            complement: this.addresses.complement.value,
          },
        };
      },

      handlerCep() {
        if (this.addresses.cep.value.length === 9) {
          if (this.hasAddress) {
            this.hasAddress = !this.hasAddress;
          } else {
            this.$emit('autocomplete-address', this.addresses.cep.value);
          }
        }
      },

      setInputErrors(errors) {
        _.mapKeys(errors, (message, input) => {
          const inputName = input.replace('addresses.', '');
          this.addresses[inputName].valid = false;
        });
      },

      cleanInputErrors() {
        _.mapKeys(this.addresses, (val, key) => {
          this.addresses[key].valid = null;
        });
      },

      setRegisterPersonAddress() {
        if (this.hasStoreAddress) {
          this.hasAddress = this.hasStoreAddress;
          _.mapKeys(this.addresses, (val, key) => {
            if (key === 'state_id') {
              const state = _.find(this.states, ['id', this.person.address[key]]);
              this.addresses[key].value = state;
            } else if (key === 'city_id') {
              this.$nextTick(() => {
                const city = this.cities.find(city => city.id == this.person.address[key]);
                this.addresses[key].value = city;
              });
            } else {
              this.addresses[key].value = this.person.address[key];
            }
          });
        }
      },
    },
  };
</script>
