class CreateViews < ActiveRecord::Migration
  def change
    create_table :views do |t|
      t.belongs_to :viewer, index: true
      t.string :path
      t.datetime :at
    end
  end
end
