<template>
  <div v-if="columns">
    <draggable class="kanban-board" group="groups" v-model="columns" @end="() => {}">
      <kanban-column v-for="(column, columnId) in columns" :key="'group_' + columnId" :label="column.column_title || 'Untitled'" @create="() => createItem(column.column_id)">
        <draggable class="kanban-board__drop-area" group="{name: 'tasks_' + columnId, put: true}" v-model="columns[columnId].items" @end="() => updateBoard()">
          <kanban-item v-for="(item, itemId) in column.items" :key="'item_' + itemId" v-model="item.content" @change="() => updateBoard()" @delete="() => removeItem(item.item_id)" />
        </draggable>
      </kanban-column>
    </draggable>
  </div>
</template>

<script>
// Components
import KanbanColumn from './KanbanColumn'
import KanbanItem from './KanbanItem'
import draggable from 'vuedraggable'
import {mapActions, mapGetters} from 'vuex'

export default {
  components: {
    KanbanColumn,
    KanbanItem,
    draggable,
  },
  mounted() {
    this.setBoard()
  },
  methods: {
    ...mapActions(
      'kanban',
      [
        'setBoard',
        'updateBoard',
        'createItem',
        'removeItem'
      ])
  },
  computed: {
    ...mapGetters({
      board: "kanban/getBoard",
      columns: "kanban/getBoardColumns",
    })
  }
}
</script>

<style lang="scss" scoped>
.kanban-board {
  width: 1200px;
  display: flex;
  gap: 15px;

  font-family: 'Nunito', sans-serif;
  color: #8A94A5;
}

.kanban-board__drop-area {
  flex: 1;
  min-height: 400px;
}
</style>
