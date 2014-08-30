class View < ActiveRecord::Base
  def browser
    UserAgent.parse(self.user_agent).browser
  end

  def os
    UserAgent.parse(self.user_agent).os
  end
end
