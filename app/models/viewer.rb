class Viewer < ActiveRecord::Base

  has_many :views

  def last_visited
    View.where(viewer_id: self.id).order(:at).last
  end

end
