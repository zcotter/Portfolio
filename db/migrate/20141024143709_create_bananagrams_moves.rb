class CreateBananagramsMoves < ActiveRecord::Migration
  def change
    create_table :bananagrams_moves do |t|
      t.belongs_to :bananagrams_game, index: true
      t.string :x0
      t.string :y0
      t.string :x1
      t.string :y1
      t.string :letter
      t.belongs_to :bananagrams_player, index: true
      t.timestamps
    end
  end
end
