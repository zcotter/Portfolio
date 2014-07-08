class CreateViewers < ActiveRecord::Migration
  def change
    create_table :viewers do |t|
      t.string :ip
    end
  end
end
