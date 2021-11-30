<template>
    <div>
        {{ message }}
    </div>
</template>

<script>
export default {
    data() {
        return {
            message: '',
            show: false,
            task_id: null
        }
    },
    methods: {
        getCurrentTaskId() {
            this.task_id = window.location.href.split('/')[4];
        }
    },
    mounted() {
        console.log('Component mounted.');

        this.getCurrentTaskId();

        window.Echo.channel('task_database_task')
            .listen('.App\\Events\\TaskUpdatedEvent' ,(e) => {
                this.show = true;
                this.message = e.message;
                this.$toaster.success(this.message);
                setTimeout(() => {
                    this.message = '';
                    if (this.task_id == e.task_id) {
                        console.log('equal');
                        document.location.reload();
                    }
                }, 5000);
            });
    }
}
</script>
