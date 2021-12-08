/**
 * Storage.
 */
const state = {
  board: {}
}

/**
 * Retrieve data from storage.
 */
const getters = {
  getBoard: state => state.board,
  getBoardColumns: state => state.board.columns,
}

/**
 * Go and get data, do other data related stuff.
 */
const actions = {
  async setBoard(state) {
    await fetch('api/board')
      .then(response => response.json())
      .then(data => state.commit("setBoard", data.data))
      .catch((error) => {
        console.error('Error:', error);
      });
  },
  async updateBoard({state, commit}) {
    await fetch(`api/board/${state.board.board_id}`, {
        method: 'PUT',
        body: JSON.stringify({board: state.board}),
        headers: {
          'Content-Type': 'application/json'
        },
      })
      .then(response => response.json())
      .then(data => commit("setBoard", data.data))
      .catch((error) => {
        console.error('Error:', error);
      });
  },
  async createItem({commit, state}, payload) {
    await fetch('api/board-item', {
        method: 'POST',
        body: JSON.stringify({
          column_id: payload,
          order: state.board.columns.find(
            c => c.column_id === payload
          ).items.length + 1
        }),
        headers: {
          'Content-Type': 'application/json'
        },
      })
      .then(response => response.json())
      .then(data => commit("setBoard", data.data))
      .catch((error) => {
        console.error('Error:', error);
      });
  },
  async removeItem({commit, dispatch}, payload) {
    await fetch(`api/board-item/${payload}`, {method: 'DELETE'})
      .then(response => response.json())
      .then(data => {
        commit("setBoard", data.data);
        dispatch("updateBoard"); // update order
      })
      .catch((error) => {
        console.error('Error:', error);
      });
  }
}

/**
 * Modify the data in storage.
 */
const mutations = {
  setBoard(state, payload) {
    state.board = payload
  },
  removeItem(state, payload) {
    state.board.columns = state.board.columns.map(c => ({
      ...c,
      items: c.items.filter(i => i.item_id != payload)
    }));
  }
}

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations,
}
